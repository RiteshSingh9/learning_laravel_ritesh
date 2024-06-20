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
