<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FukushimadatabaseController extends Controller
{
        public function login(request $request){
    	$fu_data = DB::connection('fukushima')->select('select * from lottery_data');
    	$login = DB::connection('fukushima')->select("select * from ac_data WHERE ac = '$request->ac' AND pw = '$request->pw' ");
        if($login==[]){
          return view('index');
        }else{
        $request->session()->put('user', '1');
        $value = $request->session()->get('user');
      	     return view('fukushima_database.menu', ['fu_data'=>$fu_data]);
            //return $value = $request->session()->get('user');
      }
      }
   	

//--------------------------------------------------------------------------------------------------------------------------------------

    public function delete(request $request, $id){
      $value = $request->session()->get('user');
       if($value ==1){
           DB::connection('fukushima')->delete("delete from lottery_data where sno='$id'");
           $fu_data = DB::connection('fukushima')->select('select * from lottery_data');
           return view('menu', ['fu_data'=>$fu_data]);
      }else{
        return view('fukushima_database.index');
    	
    }
    }
//--------------------------------------------------------------------------------------------------------------------------------------

    public function update(request $request){
      $value = $request->session()->get('user');
      if($value ==1){
    	return view('update', ['sno'=>$request->sno, 'name'=>$request->name, 'phone_number'=>$request->phone_number, 'email'=>$request->email]);
      }else{
        return view('fukushima_database.index');
      }

    }
//--------------------------------------------------------------------------------------------------------------------------------------
    public function update_data(request $request){
    	DB::connection('fukushima')->update("update lottery_data set  name='$request->name', phone_number='$request->phone_number', email='$request->email' WHERE sno='$request->sno'");
    	$fu_data = DB::connection('fukushima')->select('select * from lottery_data');
    	return view('fukushima_database.menu', ['fu_data'=>$fu_data]);

    }

//--------------------------------------------------------------------------------------------------------------------------------------

    public function logout(request $request){
      $request->session()->forget('user', '0');
      $value = $request->session()->all();
      return redirect('/');
      //return $value;
    }

//--------------------------------------------------------------------------------------------------------------------------------------
    
    public function index(){
      $fu_data = DB::connection('fukushima')->select('select * from lottery_data');
      return view('fukushima_database.menu', ['fu_data'=>$fu_data]);
    }
}
