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
// end category info
