<?php

namespace App\Http\Controllers;
use App\Models\studentListUpdate;

use Illuminate\Http\Request;

class student_data extends Controller
{
    //
  
        function show(){
            $data1 = studentListUpdate::all();
            return view('components.student_list_search',compact('data1'));
        }
    
        function search(Request $req){
            if($req->isMethod('post')){
                $name=$req->get('program_id');
                $data1 = studentListUpdate::where('program_id','LIKE','%' . $name .'%')->paginate(5);
            }
            return view('components.student_list_search', compact('data1'));
        }
}
