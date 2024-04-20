<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//Products
Route::get('products', function () {
    return view('products');
});

//Testimonial
Route::get('clients', function () {
    return view('testimonial');
});

//Contact Us
Route::get('contact', function () {
    return view('contactus');
});
