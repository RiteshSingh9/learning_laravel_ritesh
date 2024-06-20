<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Contracts\Service\Attribute\Required;

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

    // function userHome() {
    //     $name = "Anil";
    //     $users=['Ritesh', 'Riya', 'Tanu', 'Raunak'];
    //     return view('home', ['name'=> $name, 'users'=> $users]);
    // }

    // function userAbout() {
    //     return view('about');
    // }

    function addUser(Request $req) {
        // return $req; // return all the data in request
        // echo $req['username']; // 2nd way
        // echo $req->username; // 3rd way
        // echo "<pre>";
        // echo $req;
        // form validation
        $req->validate([
            'username'=> 'required | min:3 | max:30',
            "email"=> 'required | email',
            'city'=> 'required | min:3 | max:3',
            'skills'=> 'required',
        ]);
        echo "<br />";
        echo 'Username =' . $req['username'];
        echo "<br />";
        echo "Email = ". $req->email;
        echo "<br />";
        echo "City =".$req['city'];
        echo "<br />";
        echo "skills = ";
        print_r($req->skills);
        echo "<br />";
        echo "Gender =" . $req->gender;
        echo "<br />";
        echo "Age = ".$req->age;
    }
}
