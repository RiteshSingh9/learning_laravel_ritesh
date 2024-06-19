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
