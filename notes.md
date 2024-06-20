# Laravel Directory Structure

Laravel uses MVC pattern

- **Composer.json** -> contains project details and dependencies

- **app** -> contains core **code** of our project
  
  - contains ***controllers, models, middlewares, etc.***

- **routes** -> contains the routes
  
  - ***web.php*** -> contains all routes
  
  - ***console.php*** -> used when using console 

- **resources** -> contains *css, js and __views__* of our projects
  
  - ***/css***
  
  - ***/js***
  
  - ***/views*** -> our views 

- ***/config/*** -> contains our configrations
  
  - ***factories***
  
  - ***migrations***
  
  - ***seeders***
  
  - ***database.sqlite***
  
  - other database related files

- **public**
  
  - ***index.php*** -> first file to be executed
  
  - ***favicon.ico***
  
  - ***robots.txt*** 
  
  - ***.htaccess***

- **storage**
  
  - file we create like pdf file, excel files are stored here
  
  - ***logs/*** -> stores our *logs* file

- **test/**
  
  - contains our test

- **.env**
  
  - contains our environment variable

### Directory use

    - **resources/views/** -> make views here
    - **routes/web.php** -> make routes here

### Routing

    - Route::get('/about', function () {
            return view('about');
        });
    - Route::view('/about', 'about');
    - Route::view('/about/{name}', function (string $name) {
            // echo $name; // print directly on page
            return view('about'), ['name'=> $name]);
        });
    in your view file use {{ $name }}

##### Redirect

    route::redirect('/', '/home'); // redirect welcome page to home page route

### Controller

- The controller comes under MVC architecture

- It is responsible for handling user input and updating the model and view accordingly.

- It acts as an interface between Model and View

- There are 2 ways to make a controller
  
  - **Manual**
  
  - **Using Console**
    
    - php artisan make:controller ControllerName
    
    - Example:-
      
      - php artisan make:controller UserController
        **UserController.php**
        
            <?php
            
                namespace App\Http\Controllers;
            
                use Illuminate\Http\Request;
            
                class UserController extends Controller
                {
                //
                function getUser() {
                return "Ritesh Singh";
            }
        
        }
        
        **web.php**
        
            use App\Http\Controllers\UserController;
            Route::get('user', [UserController::class, 'getUser']);

### Views

Contains ***UI*** part.
**How to Create View**

- ***Manual***

- ***Command line***
  
        php artisan make:view view_name

- ***Nested View***
  Lets suppose you have a view in **/views/admin/login** and you want to call this view then you have to use ***admin.login***
  In Laravel, nested views refer to a technique for structuring your Blade templates to create reusable components and improve code organization.

- **Check if view exists or not**
  
  - **Step 1** -> import **use Illuminate\Support\Facades\View;** in file where you want to check for the view
  
  - **Step 2** -> 
    
        if(View::exists('view_name')) {
            return view('view_name');
        } else {
            return "No View Found";
        }

### Blade Template

- Blade is a simpple, yet powerful templating engine for executing for executing PHP code

- This is included in the Laravel framework.

- **The template engine is a module or tool for executing code**

- It's faster the normal PHP execution
  
  - becaause it maintains the view in **cache**
  
  - when we change code in view it updates the **cache**

- To use blade template view should end with **.blade.php**

- See home.blade.php for tags
- **@extends** -> extends the layout
- **@section** -> defines a section of content
- **@yield** -> displays the content of a section
- **@include** -> includes a view
- **@each** -> loops through an array and includes a view for each item
- **@foreach** -> loops through an array
- **@if** -> conditional statement
- **@unless** -> conditional statement
- **@for** -> loops through an array
- **@while** -> loops through an array
- **@php** -> executes raw PHP code
- **{{ }}** -> displays the value of a variable
- **{!! !!}** -> displays the value of a variable without escaping
- **@csrf** -> generates a CSRF token field
- **@method** -> generates a form method spoofing field
- **@push** -> pushes a value onto a stack
- **@stack** -> displays the contents of a stack
- **@verbatim** -> prevents Blade from compiling the contents of the block
See laravel docs for other tags
