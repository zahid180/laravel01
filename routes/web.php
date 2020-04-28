<?php

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
//     return view('welcome');
// });
Route::get('/','welcomeController@index');
Route::get('/category','welcomeController@category');
Route::get('/contact','welcomeController@contact');
Route::get('/product-details','welcomeController@productDetails');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// start category info
Route::get('/category/add', 'CategoryController@createCategory');
Route::post('/category/save', 'CategoryController@storeCategory');
Route::get('/category/manage', 'CategoryController@manageCategory');
Route::get('/category/edit/{id}', 'CategoryController@categoryEdit');
Route::post('/category/update', 'CategoryController@categoryUpdate');
Route::get('/category/delet/{id}', 'CategoryController@categoryDelet');
// end category info

// start Manufacture info
Route::get('/manufacture/add','ManufactureController@addManufacture');
Route::post('/manufacture/save','ManufactureController@storeManufacture');
Route::get('/manufacture/manage','ManufactureController@manageManufacture');
Route::get('/manufacture/edit/{id}','ManufactureController@editManufacture');
Route::post('/manufacture/update','ManufactureController@updateManufacture');
Route::get('/manufacture/delet/{id}','ManufactureController@deletManufacture');
// end Manufacture info

// start Product info
Route::get('/product/add','productController@addProduct');
Route::post('product/save','productController@storeProduct');
Route::get('/product/manage','productController@manageProduct');
Route::get('//product/view/{id}','productController@viewtProduct');
Route::post('/product/update','productController@updateProduct');
Route::get('/product/delet/{id}','productController@deletProduct');
// end Product info
