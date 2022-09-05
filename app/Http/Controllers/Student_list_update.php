<?php

namespace App\Http\Controllers;
use App\Imports\STudentLIst;
use Illuminate\Http\Request;
use App\Models\studentListUpdate;
use Maatwebsite\Excel\Facades\Excel;


class Student_list_update extends Controller
{
    //
   public function upload(){
    $student_list = studentListUpdate::get();
    return view('components.student_list',['studentListUpdate'=>$student_list]);

   }
   public function import_user(Request $request){
      $request->validate([
            'excel_file'=>'required|mimes:xlsx'
      ]);
      Excel::import(new STudentLIst, $request->file('excel_file'));
      return redirect()->back()->with('success', 'Student data is updated successfully');
   }

 



}
