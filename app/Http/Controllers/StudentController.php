<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all(){
        $students = Student::Simplepaginate(8);
        return view("student.list-student",[
            "students"=>$students
        ]);
    }
}
