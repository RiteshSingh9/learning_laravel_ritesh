<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

route::redirect('/', '/home'); // redirect welcome page to home page route

Route::view('/home', 'home');

Route::get('/about/{name}', function (string $name) {
    // echo $name;
    return view('about', ["name"=> $name]);
});
