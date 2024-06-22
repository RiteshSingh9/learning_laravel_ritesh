<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // protected $table="collage_students";

    function testFun() {
        return "This is dummy function in model";
    }
}
