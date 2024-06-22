<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index(){
        $students = Student::all();     //getall and you need to declare variable using dollar
        return response(['data' => $students]);
    }
    public function getOnestudent($id){

        $student = Student::find($id);
        return response(['data'=>$student]);
    }
    public function addStudent(Request $request){
        // $request->all()
        $student = Student::create($request->all());   //req as ojb you need to use $request->all() for array data
       return response( $student);

    }
    public function delStudent(){

    }
}
