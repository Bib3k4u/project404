<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
class Student_list_test extends Controller
{
    //
    function show(){
        $data = student::all();
        return view('list',['testing'=>$data]);

    }
}
