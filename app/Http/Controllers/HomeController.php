<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show() {
        // return redirect()->to('home/profile/ritesh');
        // return to_route('userProfile');

        // route grouping
        return "Student List";
    }

    function add () {
        return "Add new Student";
    }
    // function user() {
    //     return to_route('user', ["name"=> 'raunak']);
    // }
}
