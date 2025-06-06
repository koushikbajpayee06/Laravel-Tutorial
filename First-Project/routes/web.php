<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('user.home');

Route::get('/post',function(){
    return view('post');
});

// Route::view('/post','post');

Route::get('/post/firstpost',function(){
    return view('firstpost');
})->name('user.view');


// ARTISAN commands --Route
// php artisan 
// php artisan route -h
// php artisan route:list
// php artisan route:list --except-vendor
// php artisan route:list --path=post



