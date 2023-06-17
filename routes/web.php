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
//     return view('welcome');
// });

//index
Route::get('/', function () {
    return view('master.master');
});

//footer
// Route::get('/', function () {
//     return view('frontend.page.home')->with('title', 'Home');
// })->name('home');

// Store Location
Route::get('/store-location', function () {
    return view('store-location');
})->name('store-location');

// Shop
Route::get('/shop-all', function () {
    return view('shop-all');
})->name('shop-all');

Route::get('/computers', function () {
    return view('computers');
})->name('computers');

Route::get('/tablets', function () {
    return view('tablets');
})->name('tablets');

Route::get('/drones-cameras', function () {
    return view('drones-cameras');
})->name('drones-cameras');

Route::get('/audio', function () {
    return view('audio');
})->name('audio');

Route::get('/mobile', function () {
    return view('mobile');
})->name('mobile');

Route::get('/tv-home-cinema', function () {
    return view('tv-home-cinema');
})->name('tv-home-cinema');

Route::get('/wearable-tech', function () {
    return view('wearable-tech');
})->name('wearable-tech');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');

// Customer Support
Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/help-center', function () {
    return view('help-center');
})->name('help-center');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/careers', function () {
    return view('careers');
})->name('careers');

// Policy
Route::get('/shipping-returns', function () {
    return view('shipping-returns');
})->name('shipping-returns');

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
})->name('terms-conditions');

Route::get('/payment-methods', function () {
    return view('payment-methods');
})->name('payment-methods');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
