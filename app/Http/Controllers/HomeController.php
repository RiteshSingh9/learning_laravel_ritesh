<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show() {
        // return redirect()->to('home/profile/ritesh');
        return to_route('userProfile');
    }
    function user() {
        return to_route('user', ["name"=> 'raunak']);
    }
}
