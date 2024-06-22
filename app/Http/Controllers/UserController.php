<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
    // students
    // function userAbout() {
    //     return view('about');
    // }

    // function addUser(Request $req) {
    //     // return $req; // return all the data in request
    //     // echo $req['username']; // 2nd way
    //     // echo $req->username; // 3rd way
    //     // echo "<pre>";
    //     // echo $req;
    //     // form validation
    //     $req->validate([
    //         'username'=> 'required | min:3 | max:20 | Uppercase',
    //         "email"=> 'required | email',
    //         'city'=> 'required | min:3 | max:50',
    //         'skills'=> 'required',
    //     ],
    //     [
    //         'username.required'=>'Username cannot be empty !!',
    //         'username.min'=>'Username must be at least 3 characters !!',
    //         'username.max'=>'Username must be at most 30 characters !!',
    //         'username.Uppercase'=>'Username must be in uppercase !!',
    //         'email.required'=>'Email cannot be empty !!',
    //         'email.email'=>'Email must be valid !!',
    //         'city.required'=>'City cannot be empty !!',
    //         'city.min'=>'City must be at least 3 characters !!',
    //         'city.max'=>'City must be at most 3 characters !!',
    //         'skills.required'=>'Skills cannot be empty !!',
    //     ]
    // );
    //     echo "<br />";
    //     echo 'Username =' . $req['username'];
    //     echo "<br />";
    //     echo "Email = ". $req->email;
    //     echo "<br />";
    //     echo "City =".$req['city'];
    //     echo "<br />";
    //     echo "skills = ";
    //     print_r($req->skills);
    //     echo "<br />";
    //     echo "Gender =" . $req->gender;
    //     echo "<br />";
    //     echo "Age = ".$req->age;
    // }

    // function users() {

    //     // return DB::select("SELECT * FROM `users`");
    //     $users = DB::select("SELECT * FROM `users`");
    //     return view('user', ["users"=> $users]);
    // }

    function get_users() {
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        // return $response;
        $data=$response->body();
        // return $response->status();
        // return $response->headers();
        return view('user', ["users"=> json_decode($data)]);
    }
}
