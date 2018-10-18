<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class displaycontroller extends Controller
{
   public function display(Request $request)
    { 
        $data = array();
    $datax=DB::select('select *from student');
        foreach( $datax as $d){
            $data['name'] = $d->name;
            $data['id'] = $d->id;
            $data['email'] = $d->email;
            $data['address'] = $d->address;
            $data['qualification'] = $d->qualification;
            $data['gender'] = $d->gender;
            $data['age'] = $d->age;
            $data['branch'] = $d->branch;
            $data['year'] = $d->year;
        }
        //return $data;
       return view('myapp.viewstudent',compact('data'));
    
    }
}
