<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/productView', 'productView');
Route::view('/cart', 'cart');
Route::view('/wishlist', 'wishlist');
Route::view('/pembayaran', 'pembayaran');
Route::view('/productPage', 'productPage');
Route::view('/syaratDanKetentuan', 'syaratDanKetentuan');
Route::view('/about', 'about');
Route::view('/store', 'store');
Route::view('/blog', 'blog');
Route::view('/blogSites', 'blogSites');

Route::view('/dashboard', 'dashboard');
Route::view('/adminProductList', 'adminProductList');
Route::view('/adminBlog', 'adminBlog');
