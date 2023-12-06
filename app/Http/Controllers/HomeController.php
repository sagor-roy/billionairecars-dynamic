<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $premium_products = Cache::remember("premium_products", env('CACHE_TIME'), function () {
            return Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')->with('brands')->where(['status' => 1, 'type' => 'Premium'])->limit(5)->orderBy('id', 'desc')->get();
        });

        $commercial_products = Cache::remember("commercial_products", env('CACHE_TIME'), function () {
            return Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')->with('brands')->where(['status' => 1, 'type' => 'Commercial'])->limit(10)->orderBy('id', 'desc')->get();
        });

        $faqs = Cache::remember("faqs", env('CACHE_TIME'), function () {
            return DB::table('faq')->where(['status' => 1])->get();
        });
        //return $commercial_products;
        return view("frontend.home", compact("premium_products", "commercial_products", "faqs"));
    }

    public function details($slug)
    {
        $details = Cache::remember("products_details_$slug", env('CACHE_TIME'), function () use ($slug) {
            return Product::with('brands')->where(['status' => 1, 'slug' => $slug])->firstOrFail();
        });
        $related_vihicles = Cache::remember("related_vihicles_$details->id", env('CACHE_TIME'), function () use ($details) {
            return Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')->with('brands')->where(['brand' => $details->brand, 'status' => 1])->limit(10)->orderBy('id', 'desc')->get();
        });
        //return $related_vihicles;
        return view('frontend.details', compact('details', 'related_vihicles'));
    }

    public function contact_message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        try {
            DB::table('contact')->insert($request->all());
            return response()->json(['status' => 'success']);
        } catch (\Throwable $th) {
            return response()->json(['status' => 'faild']);
        }
    }

    public function filter(Request $request)
    {
        $products = Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')
            ->with('brands')
            ->where(['status' => 1,])
            ->orderBy('id', 'desc')
            ->when(!empty($request->brand), function ($query) use ($request) {
                $query->where('brand', $request->brand);
            })
            ->when(!empty($request->model), function ($query) use ($request) {
                $query->where('model', $request->model);
            })
            ->when(!empty($request->transmission), function ($query) use ($request) {
                $query->where('transmission', $request->transmission);
            })
            ->when(!empty($request->fuel), function ($query) use ($request) {
                $query->where('fuel', $request->fuel);
            })
            ->when(!empty($request->condition), function ($query) use ($request) {
                $query->where('conditions', $request->condition);
            })
            ->when(!empty($request->type), function ($query) use ($request) {
                $query->where('type', $request->type);
            })
            ->when(!empty($request->color), function ($query) use ($request) {
                $query->where('color', $request->color);
            })
            ->paginate(8);
        //return $products;
        return response()->json(view('frontend.load.product', compact('products'))->render());
    }

    public function vehicles_filter()
    {
        $brands = Brand::all();
        return view('frontend.filter', compact('brands'));
    }

    public function model_filter(Request $request)
    {
        $products = Product::where('brand', $request->brand);
        $models = $products->select('model')->distinct()->get();
        $colors = $products->select('color')->distinct()->get();
        return response()->json([
            'color' => $colors->pluck('color')->toArray(),
            'model' => $models->pluck('model')->toArray()
        ]);
    }
}
