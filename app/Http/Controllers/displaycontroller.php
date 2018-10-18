<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class displaycontroller extends Controller
{
   public function display(Request $request)
    { 
    $data=DB::select('select *from student');
        print_r($data);
        return view('myapp.viewstudent',['data'=>$data]);
    
    }
}
