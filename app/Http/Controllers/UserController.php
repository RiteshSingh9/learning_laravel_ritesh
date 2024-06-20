<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    // function getUser() {
    //     return view('user');
    // }

    // function aboutUser() {
    //     return "About User";
    // }

    // function getUserName($name) {
    //     return view('GetUser', ["name" => $name]);
    // }

    // function adminLogin() {
    //     if (View::exists('admin.login')) {
    //         return view('test');
    //     } else {
    //         echo "No View Find";
    //     }
    // }

    // function adminSignup() {
    //     if (View::exists('admin.signup')) {
    //         return view('admin.signup');
    //     } else {
    //         echo "No View Find for signup";
    //     }
    // }

    // function testView() {
    //     return view('test');
    // }

    function userHome() {
        $name = "Anil";
        $users=['Ritesh', 'Riya', 'Tanu', 'Raunak'];
        return view('home', ['name'=> $name, 'users'=> $users]);
    }

}
