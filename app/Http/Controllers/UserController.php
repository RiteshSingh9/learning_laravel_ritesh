<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    // function get_users() {
    //     $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
    //     // return $response;
    //     $data=$response->body();
    //     // return $response->status();
    //     // return $response->headers();
    //     return view('user', ["users"=> json_decode($data)]);
    // }

    function queries() {
        // $res = User::all();
        // $res = User::get();
        // $res = User::where('email', 'ritesh@test.com')->get();
        // $res = User::where('email', 'ritesh@test.com')->first();
        // $res = User::find(1);
        // $res = User::insert([
        //     'name'=>'Ritesh 3',
        //     'email' => 'ritesh3@test.com',
        //     'password'=> '123456'
        // ]);
        // if ($res) {
        //     return 'data inserted';
        // } else {
        //     return 'data not inserted';
        // }

        // $res = User::where('email', 'ritesh@test.com')->update([
        //     'email' => 'ritesh@update.com',
        // ]);
        // if ($res) {
        //     return 'data updated';
        // } else {
        //     return 'data not updated';
        // }

        $res = User::where('email', 'raunak@test.com')->delete();
        if ($res) {
            return 'data deleted';
        } else {
            return 'data not deleted';
        }
        // return json_encode($res);
    }

    function login(Request $request) {
        // return json_encode($request);
        echo "Request Method is : " . $request->method() ."<br />";
        echo "Request Path is : " . $request->path() ."<br />";
        echo "Request URL is : " . $request->url() ."<br />";
        echo "Name is : " . $request->input('username') ."<br />";
        echo "<pre>";
        print_r($request->input());
        print_r(($request->collect()));
        echo "</pre>";
        // if($request->isMethod('post')) {
        //     echo 'execute code for post_method';
        // } else {
        //     echo 'execute code for other request';
        // }
        echo $request->host() . '<br />'; // get the host
        if($request->is('user')) {
            echo 'execute code for user path';
        } else {
            echo 'execute code for other path';
        }

        echo $request->ip(); // get ip from which request is coming;


    }


}
