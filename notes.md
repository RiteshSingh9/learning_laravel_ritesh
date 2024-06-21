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

### Subviews

- Subviews are used to break up a large view into smaller, more manageable pieces.

- Subviews are typically used to render a portion of a view, such as a header or footer

- Subviews are typically stored in the **`resources/views`** directory, just like regular views.

- Subviews can be rendered using the **`@include`** directive.

- **How to make a subviews**
  
  - It's similar to making of normal view
    
        php artisan make:view folder_name.view_name
    
    Example
    
        php artisan make:view common.header

- **How to include subviews**
  
      @include("folder_name_.view_name")
  
    **Example**:- we want to include subviews in about page
  
        @include("common.header")
        <h2>This is about page</h2>
        @include('common.inner')

- **How to pass data to subviews**
  
   **Example**:- we want to pass data to about page
  
        @include("common.header")
        <h2>This is about page</h2>
        @include('common.inner', ['page'=> 'This is about page'])
  
  - 

- **What is subview does not exists**
  
        @include("common.header")
        <h2>This is about page</h2>
        @include('common.inner', ['page'=> 'This is about page'])
        @include('common.doNoExistsFile'); // file does not exists show error
        @includeIf(If'common.doNot') // does not show error

### Components

- Components are reusable pieces of code that can be used throughout your application.

- Components are typically used to render a portion of a view, such as a button or a form

- Components are typically stored in the **`resources/views/components`** directory.

- Components can be rendered using the **`@component`** directive.

- Difference between ***function*** and ***component*** 
  
  - ***function*** contains code of only the language
  - **components** can contain ui part also

- **How to make a component**
  
      php artisan make:component component_name
  
    **Example**:-
  
      php artisan make:component messageBanner
  
    This command create two files
  
  - one in ***app/View/Components/messageBanner.php***
  - one in ***resources/views/components/message-banner.blade.php***
  
  **How to use Component**
  
  Let's suppose we want to use our **message-banner** component in home page then
  
      <x-message-banner />
      <h1>Home Page</h1>
  
  **Pass data to component**

- **Step 1** -> in you **home.blade.php**
  
      <x-message-banner msg="User Login Successfull" class="warning" />
      <x-message-banner msg="User Signup Successfull" class="error" />
      <h1>Home Page</h1>

- **Step 2** -> in your **app/View/Components/messageBanner.php**
  
      public function __construct($msg, $class)
      {
          //
          $this->msg=$msg;
          $this->class=$class;
      }

- **STep 3** -> in you **message-banner.blade.php**
  
      <div>
            <span class="{{ $class }}">{{ $msg }}</span>
      <div>

### Forms

**NOTE :-** when you submit any form with csrf token it will give error *page expired* error code *419*. To prevent this use ***@csrf*** inside your form.

- #### Form Validation
  
  Laravel has inbuilt mathod for validation called validate();

- **How to use**
  
        $req->validate([
            'username'=> 'required | min:3 | max:30',
            "email"=> 'required | email',
            'city'=> 'required | min:3 | max:3',
            'skills'=> 'required',
        ]);

- **Show Errors**
  
        {{-- {{ print_r($errors) }} --}}
        <!-- method 2 -->
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div>
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <!-- method 3 -->
        <div class="form-group">
            <input type="text" class="form-input" placeholder="Enter user name" name="username" /> <br/>
            <span style="color: saddlebrown">
                @error('username')
                {{ $message }}
                @enderror
            </span>
        </div>

- **Custom Validation**
  
  - internally **validation.php**file is responsible for displaying message.
  
  - by default you can't see it 
  
  - to see it you have to use command
    
        php artisan land:publish
  
  - This command will create another folder called **lang**. This folder will contain validation.php
  
  - If you want to make changes for complete project then **only change this file**
  
  - For one or two files use this method.
    
        $req->validate([
            'username'=> 'required | min:3 | max:20',
            "email"=> 'required | email',
            'city'=> 'required | min:3 | max:50',
            'skills'=> 'required',
        ],
        [
            'username.required'=>'Username cannot be empty !!',
            'username.min'=>'Username must be at least 3 characters !!',
            'username.max'=>'Username must be at most 30 characters !!',
            'email.required'=>'Email cannot be empty !!',
            'email.email'=>'Email must be valid !!',
            'city.required'=>'City cannot be empty !!',
            'city.min'=>'City must be at least 3 characters !!',
            'city.max'=>'City must be at most 3 characters !!',
            'skills.required'=>'Skills cannot be empty !!',
        ]
    
      );

- **To prevent getting remove**
  Use **old('varaible_name')** in value field of **input**
  
  **Example**
  
      @csrf
      <div class="form-group">
          <input type="text" class="form-input" placeholder="Enter user name" name="username"  value="{{ old('username') }}" />
          <br/>
          <span style="color: saddlebrown">
              @error('username')
               {{ $message }}
              @enderror
          </span>
      </div>
  
  **For checkboxes it's syntax is**
  
      <input type="checkbox" id="php" class="form-input" name="skills[]" value="php" {{ old('skills', []) ? (in_array('php', old('skills', [])) ? 'checked' : '') : '' }}/>
  
  <label for="php">PHP</label>

- **To use a class only if there is an error**
  
      <input type="text" class="{{ $errors->first('variable_name') }}" />
  
    **Example**
  
      <input type="text" class="form-input {{ $errors->first('username')?'input-error':'' }}" placeholder="Enter user name" name="username"  value="{{ old('username') }}" />

- **Custom validation Rule**
  These are mode for validation that are not available in laravel
  **Example**
  You want the username must only be in Capital letter
  **Command to make**
  
      php artisan make:rule Your_rule_name
  
  This command will make folder **Rules**  in **app** directory that will contain all your rules.
  
      php artisan make:rule Uppercase
  
  This command will create file **Uppercase.php** in **app/Rules** folder
  **Initial code of this file will look like this**
  
        <?php
        namespace App\Rules;use Closure;
        use Illuminate\Contracts\Validation\ValidationRule;
      
        class Uppercase implements ValidationRule
        {
        /**
          * Run the validation rule.
          *
          * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
          */
        public function validate(string $attribute, mixed $value, Closure $fail): void
        {
            //
        }
        }
  
  write you validation rules in **validate()**
  **Example**
  Let's suppose you want to the username to be in uppercase only then 
    **uppercase.php**
  
          <?php
          namespace App\Rules;
          use Closure;
          use Illuminate\Contracts\Validation\ValidationRule;
          class Uppercase implements ValidationRule
          {
            /**
              * Run the validation rule.
              *
              * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
            */
            public function validate(string $attribute, mixed $value, Closure $fail): void
            {
                //
                if(strtoupper($value) != $value) {
                    $fail('the :attribute must be in uppercase');
                }
            }
          }

**:attribute** will is a placeholder that will replace it with field name 

Then use it as normal validation 

### URL Generation

- **What is URL generation**
  
  - It's a laravel **feature** to **routing, link and url**related works easily.
  - It's done by using function.

- **How to get current url**
  
  - **Method 1**
    
    Use this command in your view.
    
        {{ URL::current() }}
        // or
        {{ url()->current() }}
  
  - **Issue** -> can't get parameters
    
    To get **full URL*** with parameters use 
    
        {{ URL::full() }}
        // or 
        {{ url()->full() }}
    
    To get **previous URL** use
    
        {{ URL::previous() }}
        // or
        {{ url()->previous() }}
    
    To make **URL**
    
        <a href="/about">About</a>
        // or
        <a href="{{ URL::to('about') }}">About</a>
    
    For url with **parameters** like /about/{name} use: 
    
        <a href="{{ URL::to('about', ['anil'])}}">About Anil</a>

- #### Named Routes
  
  Let's suppose we have a route **/home/profile/ritesh** then use
  
      Route::view('/home/profile/ritesh', 'home')->name('userProfile');
  
  In your view
  
      route('userProfile')
      <a href="{{ route('userProfile') }}">Go to Ritesh's Profile</a>
  
  To use named route in controller
  Let's suppose we want to redirect the **/show** url to **/home/profile/ritesh** then
  
      return redirect()->to('home/profile/ritesh');
      // or this way for named route
      return to_route('userProfile');
  
  To use parameter like if we want to go to url '**/home/profile/{name}**' use 
  
      Route::view('/home/profile/{name}', 'home')->name('user');
      Route::get('/user', [HomeController::class, 'user']);
  
  In your Controller
  
      function user() {
        return to_route('user', ["name"=> 'raunak']);
      }
  
  **NOTE** -> key in controller should be excatly same as in url parameter

- #### Routes grouping with prefix
  
  Normally we have to use
  
      Route::view('student/home', 'home');
      Route::get('student/show', [HomeController::class, 'show']);
      Route::get('student/add', [HomeController::class, 'add']);
  
  but with route group with prefix we use
  
      Route::prefix('student')->group(function () {
          Route::view('home', 'home');
          Route::get('show', [HomeController::class, 'show']);
          Route::get('add', [HomeController::class, 'add']);
      });

- #### Routes grouping with Controller
  
  Normal way
  
      Route::get("/show", [StudentController::class, 'show']);
      Route::get("/add", [StudentController::class, 'add']);
      Route::get("/delete", [StudentController::class, 'delete']);
  
  User Controller Grouping
  
      Route::controller(StudentController::class)->group(function () {
        Route::get("/show", 'show');
        Route::get("/add", 'add');
        Route::get("/delete", 'delete');
        Route::get('/about/{name}', 'about');
      });
      