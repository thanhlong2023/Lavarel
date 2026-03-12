<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// Route::get('/about', function () {
//     return view('about');
// });
// Route::view('/about', 'about');
Route::get('/about/{name}/{age}', function ($name, $age) {
    return view('about', ['name' => $name, 'age' => $age]);
});

//sử dụng url route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
