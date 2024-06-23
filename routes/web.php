<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });

// route::redirect('/', '/home'); // redirect welcome page to home page route

// Route::view('/', 'home');
// Route::view('/home', 'home');
// Route::view('/welcome', 'welcome');

// Route::view('/user', 'user');
// Route::view('/about', 'about');
// Route::view('/about/{name}', 'about');

// Named Routes
// Route::view('/home/profile/ritesh', 'home')->name('userProfile');
// Route::view('/home/profile/{name}', 'home')->name('user');

// Route::get('/show', [HomeController::class, 'show']);
// Route::get('/user', [HomeController::class, 'user']);



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

// Route Grouping with prefix
// Route::view('student/home', 'home');
// Route::get('student/show', [HomeController::class, 'show']);
// Route::get('student/add', [HomeController::class, 'add']);

// Route::view('home', 'home')->middleware('check1');
// Route::view('home', 'home')->middleware([AgeCheck::class, CountryCheck::class]);
// Route::view('about', 'about');

// Route grouping with prefix
// Route::prefix('student')->group(function () {
//     Route::view('home', 'home');
//     Route::get('show', [HomeController::class, 'show']);
//     Route::get('add', [HomeController::class, 'add']);
// });

// Route::prefix('student/india')->group(function () {
//     Route::view('home', 'home');
//     Route::get('show', [HomeController::class, 'show']);
//     Route::get('add', [HomeController::class, 'add']);
// });

// route grouping with controller

// normal way
// Route::get("/show", [StudentController::class, 'show']);
// Route::get("/add", [StudentController::class, 'add']);
// Route::get("/delete", [StudentController::class, 'delete']);

// controller way
// Route::controller(StudentController::class)->group(function () {
//     Route::get("/show", 'show');
//     Route::get("/add", 'add');
//     Route::get("/delete", 'delete');
//     Route::get('/about/{name}', 'about');
// });

// Route::middleware('check1')->group(function () {
//     Route::view('home', 'home');
//     Route::view('about', 'about');
// });

// Route::get('users', [UserController::class, 'users']);
// Route::get('users', [UserController::class, 'get_users']);
// Route::get('users', [UserController::class, 'queries']);
// Route::get('/students', [StudentController::class, 'get_students']);

// Http Request Class
Route::view('form', 'user');
Route::post('user', [UserController::class, 'login']);
