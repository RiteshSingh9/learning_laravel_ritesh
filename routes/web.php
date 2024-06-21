<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// route::redirect('/', '/home'); // redirect welcome page to home page route

Route::view('/', 'home');
Route::view('/home', 'home');
Route::view('/welcome', 'welcome');

Route::view('/user', 'user');
Route::view('/about', 'about');
Route::view('/about/{name}', 'about');
// Named Routes
// Route::view('/home/profile/ritesh', 'home')->name('userProfile');
Route::view('/home/profile/{name}', 'home')->name('user');

Route::get('/show', [HomeController::class, 'show']);
Route::get('/user', [HomeController::class, 'user']);



// Route::get('/about/{name}', function (string $name) {
//     // echo $name;
//     return view('about', ["name"=> $name]);
// });

// Route::get('user', [UserController::class, 'getUser']);
// Route::get('about', [UserController::class, 'aboutUser']);
// Route::get('user/{name}', [UserController::class, 'getUserName']);

// Route::get('admin', [UserController::class, 'adminLogin']);
// Route::get('/test', [UserController::class, 'testView']);

// Route::get('/home', [UserController::class, 'userHome']);
// Route::get('/about', [UserController::class, 'userAbout']);
// Route::view('/user', 'user-form');
// Route::post('/user/add', [UserController::class, 'addUser']);

