<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\updateProgram;
class update_program extends Controller
{
    function addprogram(Request $req){
        $data = new updateProgram;
        $data->program_id = $req->program_id;
        $data->program_name = $req->program_name;
        $data->year = $req->year;
        $data->semester = $req->semester;
        $data->specialization = $req->specialization;
        $data->save();
        return redirect('updateprogram');
    }
    function show(){
        $data = updateProgram::all();
        return view('components.update_program',['updateProgram'=>$data]);
    }

    function delete($id){
        $data = updateProgram::find($id);
        $data->delete();
       
        return redirect('updateprogram');
    }
    
    // function validat(Request $req){

    //     $req->validate([
    //         'program_id'=>'required',
    //         'program_name'=>'required',
    //         'year'=>'required',
    //         'semester'=>'required',
    //         'specialization'=>'required'
    //   ]);
    //         return $req->input();
    // }
  

}