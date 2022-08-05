<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $_GRID_URL = "/student/list";

    public function view(Request $request){
        $student = Student::simplePaginate(10);
        return view("Lists.StudentList",[
            "student"=>$student
        ]);
    }
    public function form(){
        return view("Forms.StudentForm");
    }
    public function create(Request $request,Student $student){
        $request->validate([
            'id'=>'required|int|unique:student',
            'name'=>'required|string',
            'age'=>'required|int',
            'address'=> "required|string",
            'telephone'=>"required|string"
        ],[
            'required'=>"Vui lòng nhập thông tin",
        ]);
        $student = Student::create(
            [
                "id"=>$request->get("id"),
                "name"=>$request->get("name"),
                "age"=>$request->get("age"),
                "address"=>$request->get("address"),
                "telephone"=>$request->get("telephone")
            ]
        );

        return redirect()->to($this->_GRID_URL);
    }
}
