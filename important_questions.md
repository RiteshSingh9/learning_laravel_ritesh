# Important Questions for Interviews

- **What is use of blade**

- **What is MVC**
  
  - _What is full form of MVC_
  - _What is the use of Model, Views, Controller ?_
  - _What connects Model and Views_

- **What is Controller ?**
  
  - ***Answer***
    
    - The controller comes under MVC architecture
    - It is responsible for handling user input and updating the model and view accordingly
    - It acts as an interface between Model and View

### Question Related to Views

- **What is View?**
  
  - **Answer**
    - View Contains the ***UI*** part of project.

- **How to make a view using Console**
  
  - **Answer**
    
        php artisan make:view view_name

- **What is nested view**
  
  - **Answer**
    - Nested view is a view inside another view.
    - In Laravel, nested views refer to a technique for structuring your Blade templates to create reusable components and improve code organization.

- **How to check if a view exists or not ?**
  
  - **Answer**
    
    - **Step 1** -> import **use Illuminate\Support\Facades\View;** in file where you want to check for the view
    
    - **Step 2** ->
      
            if(View::exists('view_name')) {
                return view('view_name');  
            } else {
                return "No View Found";
            }

### Blade related question

- **What is blade ?**

- **Question related to blade tags**

### Subviews

- **What are subviews**
  
  - **Answer**
    
    - Subviews are used to break up a large view into smaller, more manageable pieces.
    
    - Subviews are typically used to render a portion of a view, such as a header or footer
    
    - Subviews are typically stored in the **`resources/views`** directory, just like regular views.
    
    - Subviews can be rendered using the **`@include`** directive.

- **How to pass data to subview**
  
  - **Answer**
    - It is similar to passing data to views

### Components

- **What are components**
   **Answer**
  
  - Components are reusable pieces of code that can be used throughout your application.
  
  - Components are typically used to render a portion of a view, such as a button or a form
  
  - Components are typically stored in the **`resources/views/components`** directory.
  
  - Components can be rendered using the **`@component`** directive.
  
  - Difference between ***function*** and ***component*** 
    
    - ***function*** contains code of only the language
    - **components** can contain ui part also

- **How to make a component**
    **Answer**
  
          php artisan make:component component_name

### Form

**NOTE :-** when you submit any form with csrf token it will give error *page expired* error code *419*. To prevent this use ***@csrf*** inside your form.

- What to do if we get error 419
  
  **Answer**
  
  Use @csrf token

- **Difference between GET and POST request**

- **Command for Validation Rule**

- **What are validation rule ?**

- **How to make validation rule ?**

### Route Grouping

- **Type of Route Grouping**

- **How to make route group with Controller**

### Middlewares

- **What are middleware?**
- **Command to make the ?**
- **Types of Middleware ?**

### Database

- **Command for running migration**

- **How to handle SQLSTATE[42S02]  error ?**
  
  **Answer**
  
  - Laravel by default store session in database and if it does not found a table for session in database it shows this error 
  
  - To handle this errror we can run migration or set **SESSION_DRIVER=file**. However it is not recommended to do this.

## Eloquent Model

- **What is Eloquent Model**

- **What to do if table name and model name don't match ?**

- **How to inspect a Model**

## Http Client

- **What is Http Client ?**

## Eloquent Model: Query Builder

- How to set timestap false ?

### Http request class

- **what is difference between input() and   collect() methods**

## Session and Flash session

- what is session ?

- What is flash session ?

- Difference between session and flash session

- how to keep a flash session

- use of keep() method

- how to keep and array of flash session 

### File upload and display file

- How to upload file ?

- How to upload file with custom name ?

- How to display file ?

- How to link **/storage/app/public** to **/resources/public/storage**
  
      php artisan storage:link
