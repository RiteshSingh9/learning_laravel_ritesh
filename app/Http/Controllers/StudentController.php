<?php

namespace App\Http\Controllers;

// use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //{
    function get_students()
    {
        $funObj = new \App\Models\Student;
        echo $funObj->testFun();
        $students = \App\Models\Student::all(); // all() get all data from table
        // return json_encode($students);
        return view('students', ['students'=>$students]);
    }

    function add()
    {
        return "New student added";
    }

    /**
     * Deletes a student.
     *
     * @return string Returns a message indicating that the student has been deleted.
     */
    function delete()
    {
        return "Student Deleted";
    }


    function about($name)
    {
        return "about " . $name;
    }
}
