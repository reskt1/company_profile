<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tentang-kami',function(){
    return view('about');
});
Route::get('/layanan',function(){
    return view('service');
});
Route::get('/kontak',function(){
    return view('contact');
});
