<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;
use App\Brand;
use DB; //use for joining table

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Join Tables
        $item = DB::table('items')
                -> join('subcategories', 'items.subcategory_id', '=', 'subcategories.id')
                -> join('brands', 'items.brand_id', '=', 'brands.id')
                -> select('items.*', 'subcategories.name as sname', 'brands.name as bname')
                -> get();

        return view('backend.items.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        return view('backend.items.create', compact('subcategories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation
        $request->validate([
            'name' => 'required|min:5|max:191',
            'codeno' => 'required',
            'photo' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'brand_id' => 'required',
            'subcategory_id' => 'required'
        ]);

        // dd($request);

        // File Upload (photo = name from input)
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('images'), $imageName);

        $filepath = 'images/'.$imageName;

        // Data Insert
        $item = new Item;
        $item->name = $request->name;
        $item->codeno = $request->codeno;
        $item->photo = $request->photo;
        $item->price = $request->price;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->brand_id = $request->brand_id;
        $item->sub_category_id = $request->subcategory_id;

        $item->save();

        // Return
        return redirect()->route('item.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
