<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnValue;

class HomeController extends Controller
{
    public function index()
    {
        return Cache::remember("home", env('CACHE_TIME'), function () {
            $premium_products = Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')
                ->with('brands')
                ->where(['status' => 1, 'type' => 'Premium'])
                ->orderBy('id', 'desc')
                ->limit(5)
                ->get();

            $commercial_products = Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')
                ->with('brands')
                ->where(['status' => 1, 'type' => 'Commercial'])
                ->limit(10)
                ->orderBy('id', 'desc')
                ->get();

            $faqs = DB::table('faq')->where(['status' => 1])->get();
            $home_slider = DB::table('home_slider')->first();
            $brands = Brand::all();

            return view("frontend.home", compact("premium_products", "commercial_products", "faqs", "brands", "home_slider"))->render();
        });
    }


    public function details($slug)
    {
        return Cache::remember("details_$slug", env('CACHE_TIME'), function () use ($slug) {
            $details = Product::with('brands')->where(['status' => 1, 'slug' => $slug])->firstOrFail();

            $related_vehicles = Product::select('title', 'slug', 'price', 'thumbnail', 'year', 'brand', 'fuel', 'color', 'conditions')
                ->with('brands')
                ->where(['brand' => $details->brand, 'status' => 1])
                ->limit(10)
                ->orderBy('id', 'desc')
                ->get();

            return view('frontend.details', compact('details', 'related_vehicles'))->render();
        });
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
            ->when(!empty($request->price), function ($query) use ($request) {
                $query->where('price', '<=', $request->price);
            })
            ->paginate(8);
        //return $products;
        return response()->json(view('frontend.load.product', compact('products'))->render());
    }

    public function vehicles_filter(Request $request)
    {
        $brands = Brand::all();
        $products = Product::where(['status' => 1])
            ->when(!empty($request->type), function ($query) use ($request) {
                $query->where('type', $request->type);
            })->get();

        $new_condition = $products->where('conditions', 'New')->count();
        $use_condition = $products->where('conditions', 'Use')->count();
        $all_condition = $products->count();
        return view('frontend.filter', compact('brands', 'new_condition', 'use_condition', 'all_condition'));
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

    public function car_plan()
    {
        $blogs = Cache::remember("blogs", env('CACHE_TIME'), function () {
            return DB::table('blog')->where(['status' => 1])->get();
        });
        return view('frontend.blog', compact('blogs'));
    }

    public function faq()
    {
        $faqs = Cache::remember("faqs", env('CACHE_TIME'), function () {
            return DB::table('faq')->where(['status' => 1])->get();
        });
        return view('frontend.faq', compact('faqs'));
    }

    public function blog_details($slug)
    {
        $details = Cache::remember("blog_details_$slug", env('CACHE_TIME'), function () use ($slug) {
            return DB::table('blog')->where(['status' => 1, 'slug' => $slug])->first();
        });
        return view('frontend.blog_details', compact('details'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
