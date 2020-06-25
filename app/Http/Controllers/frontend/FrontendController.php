<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Category;

class FrontendController extends Controller
{
    public function index($value='')
    {
        $categories = Category::all();

        $discountItems = Item::where('discount','>',0)
                                ->take(4)
                                ->get();

        $recommendItems = Item::where('discount',0)
                                ->take(5)
                                ->get();

    	return view('frontend.index', compact('categories','discountItems', 'recommendItems'));
    }

     public function shop($id)
    {
        $items = Item::where('subcategory_id', $id)->get();
    	return view('frontend.brandshop', compact('items'));
    }

     public function cart($value='')
    {
    	return view('frontend.cart');
    }

    public function shopdetail($id)
    {
    	$item = Item::find($id);
    	return view('frontend.shopdetail', compact('item'));
    }
}
