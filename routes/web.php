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
//     return view('index');
// });
// Index Page
Route::get('/', 'index@indexpageview')->name('index');
// Shop Page
Route::get('/Shop', 'ShopController@shoppageview')->name('shop');
// Shop Details
Route::get('/Shop-Details', function () {
    return view('pages.shop_details');
})->name('shop_details');
// Shopping Cart
Route::get('/Shopping-Cart', function () {
    return view('pages.shopping_cart');
})->name('shopping_cart');
// Checkout
Route::get('/Checkout', function () {
    return view('pages.checkout');
})->name('checkout');
// Blog Details
Route::get('/Blog-Details', function () {
    return view('pages.blog_details');
})->name('blog_details');
// Blog
Route::get('/Blog', function () {
    return view('pages.blog');
})->name('blog');
//Contact
Route::get('/Contact', function () {
    return view('pages.contact');
})->name('contact');