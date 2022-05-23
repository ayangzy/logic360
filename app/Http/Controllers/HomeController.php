<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Market;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalCategories = Category::count();
        $totalProducts = Product::count();
        $totalMarkets = Market::count();
        return view('home', compact('totalCategories', 'totalProducts', 'totalMarkets'));
    }
}
