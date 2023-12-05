<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        //return $commercial_products;
        return view("frontend.home", compact("premium_products", "commercial_products"));
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
        return view('frontend.details', compact('details','related_vihicles'));
    }
}
