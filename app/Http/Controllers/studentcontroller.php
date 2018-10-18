<?php
namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{
    public function store(Request $request)
    {
    	//print_r($request->input());
        $data = $request->all();
      print_r($data);
    	
        $result=DB::table('student')->insert([
            'id' => $data['id'],
            'name' => $data['name'],
            'email' => $data['email'],
            'address'=>$data['address'],
            'qualification'=>$data['qualification'],
            'gender'=>$data['gender'],
            'age' =>$data['age'],
            'branch'=>$data['branch'],
            'year'=>$data['year']
        ]);
      if ($result) {
            echo '<script>';
            echo 'alert("Save Successfully")';
            echo '</script>';
            
        }
    	return view('myapp.resume1');
    }

    public function store1(Request $request)
    {
      //print_r($request->input());
        $data = $request->all();
      print_r($data);
      
        $result=DB::table('company')->insert([
            'cname' => $data['cname'],
            'cpname' => $data['cpname'],
            'cpnumber' => $data['cpnumber'],
            'address'=>$data['address'],
            'city'=>$data['city'],
            'state'=>$data['state'],
            'pcode' =>$data['pcode'],
            'country'=>$data['country'],
            'fnumber'=>$data['fnumber'],
            'wside'=>$data['wside']
        ]);
      if ($result) {
            echo '<script>';
            echo 'alert("Save Successfully")';
            echo '</script>';
            
        }
      return view('myapp.company_details');
    }
  }
