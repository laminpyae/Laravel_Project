<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;

class FrontendController extends Controller
{
    public function index($value='')
    {
    	return view('frontend.index');
    }

     public function shop($value='')
    {
    	return view('frontend.brandshop');
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
