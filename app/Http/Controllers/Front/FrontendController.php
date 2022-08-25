<?php

namespace App\Http\Controllers\Front;

use App\Models\Market;
use App\Models\Product;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $markets = Market::pluck('location_id');
        $locations = Location::whereIn('id', $markets)->select('id', 'name')->get();
        $categories = Category::query()->select('id', 'name')->get();

        $products = Product::query()->paginate(14);
        
        return view('front.index', compact('locations', 'markets', 'categories', 'products'));
       
    }

    public function marketPrducts(Request $request, $id)
    {
        $markets = Market::pluck('location_id');
        $locations = Location::whereIn('id', $markets)->select('id', 'name')->get();
        $categories = Category::query()->select('id', 'name')->get();
        $id = Crypt::decrypt($id);
        
        if($request->filled('search')){
            $searchString = $request->input('search');
            $products = Product::whereHas('market', function ($query) use ($searchString) {
                $query->where('name', 'LIKE', '%' . $searchString . '%');
            })->paginate(14);
        }else{
            $products = Product::where('market_id', $id)->paginate(21);
        }
       
        return view('front.market-products', compact('locations', 'markets', 'categories', 'products'));
    }

    

}
