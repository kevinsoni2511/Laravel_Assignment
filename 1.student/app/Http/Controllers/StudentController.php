<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        return view("home");
    }
    public function Form(){
        return view("Form");
    }

    public function submitform(Request $request){
        $data = $request->all();
        return view("StudentSummery",compact("data"));
    }
}