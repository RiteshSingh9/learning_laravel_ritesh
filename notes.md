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
  
  - containes our test

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
