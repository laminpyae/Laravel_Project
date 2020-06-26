<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('test', function()
{
	return view('testing');
})->name('testpage');

Route::get('dashboard', 'backend\BackendController@index')->name('dashboard');

Route::resource('categories', 'backend\CategoryController');
// ->middleware('auth');

Route::resource('brands', 'backend\BrandController');

Route::resource('subcategories', 'backend\SubcategoryController');

Route::resource('items', 'backend\ItemController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'frontend\FrontendController@index')->name('index');

Route::get('shop/{id}', 'frontend\FrontendController@shop')->name('shop');

Route::get('cart', 'frontend\FrontendController@cart')->name('cart');

Route::get('shopdetail/{id}', 'frontend\FrontendController@shopdetail')->name('shopdetail');

Route::resource('orders', 'backend\OrderController');



