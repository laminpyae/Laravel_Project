<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{   
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index');

    //     // ->only('index');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        // dd($category);
        return view('backend.categories.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
            'photo' => 'required|mimes:jpeg,bmp,png'
        ]);

        // dd($request);

        // File Upload (photo = name from input)
        $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('images'), $imageName);

        $filepath = 'images/'.$imageName;

        // Data Insert
        $category = new Category;
        $category->name = $request->name;
        $category->photo = $filepath;

        $category->save();

        // Return
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('backend.categories.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        // dd($category);
        return view('backend.categories.edit', compact('category'));
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
         // Validation
        $request->validate([
            'name' => 'required|min:5|max:191',
            'logo' => 'sometimes|mimes:jpeg,bmp,png'
        ]);

        // dd($request);

        // File Upload (photo = name from input)
        if ($request->hasFile('logo')) {
        
           $imageName = time().'.'.$request->logo->extension();

           $request->logo->move(public_path('images'), $imageName);

           $filepath = 'images/'.$imageName;

           // Delete Old Photo
           unlink($request->oldphoto);

       } else {
            $filepath = $request->oldphoto;
       }
       
        // Data Update
       $brand = Brand::find($id);
       $brand->name = $request->name;
       $brand->logo = $filepath;

       $brand->save();

        // Return
       return redirect()->route('brands.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brands.index');
    }
}
