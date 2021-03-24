<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FukushimaforestController extends Controller
{
    public function index(){
    	return view('fukushima_forest.index');
    }

    public function info($no){
    	$url = 'fukushima_forest.info-'.$no;
    	//return $url;
    	return view($url, ['no'=>$no]);
    }

    public function qa($no){
    	$select = DB::connection('fukushima_forest')->select("select * from question where id='$no'");
    	$a = " ";
    	return view('fukushima_forest.qa', ['no'=>$no, 'data'=>$select, 'a'=>$a]);
    }

    public function form(){
    	return view('fukushima_forest.form');
    }

    public function share(request $request){
    	DB::connection('fukushima_forest')->insert("insert into user_data(name, email, phone)value('$request->name', '$request->email', '$request->phone')");
    	return view('fukushima_forest.share');
    }
}
