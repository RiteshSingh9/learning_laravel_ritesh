<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser() {
        return view('user');
    }

    function aboutUser() {
        return "Hello this is Ritesh Singh";
    }

    function getUserName($name) {
        return view('GetUser', ["name" => $name]);
    }

    function adminLogin() {
        return view('admin.login');
    }
}
