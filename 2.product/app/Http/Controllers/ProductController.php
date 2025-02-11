<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    //
    public function index(){
        return view("CreateEntryForm");
    }
    public function form(){
        return view("form");
    }

public function submitform(Request $request){
    $data = $request->all();
    return view("display", compact("data"));
    }
}
