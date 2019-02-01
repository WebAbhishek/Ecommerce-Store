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
//     return view('index');
// });

#Index Page Routes
Route::get('/', 'MainPageController@index')->name('main-page');
Route::get('/contact', 'MainPageController@contact')->name('main.contact');
Route::get('/blog', 'MainPageController@blog')->name('main.blog');

#Shop Page Routes
Route::get('/shop', 'ShopController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');

#Cart Page Route
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');