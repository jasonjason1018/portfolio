<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkodaecardController extends Controller
{
    public function index(){
    	return view('skodaecard.index');
    }

    private function randomkeys($length){
        $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
        $key="0";
        for($i=0;$i<$length;$i++){
        $key .= $pattern{rand(0,35)};
        }
        return $key;
        }


    public function result(request $request){
        
        $id = $this->randomkeys(8);
    	$name = $request->name;
    	$wish_name = $request->wish_name;
    	$string = $request->textarea;
    	$img = $request->place_select;
    	DB::connection('skoda_ecard')->insert("insert into ecard_data (name, wish_name, string, img, data_id) values ('$name', '$wish_name', '$string', '$img', '$id')");
    	return view('skodaecard.result', ['name'=>$request->name,'wish_name'=>$request->wish_name,'textarea'=>$request->textarea, 'img'=>$request->place_select, 'data_id'=>$id]);

    }

    public function card($id){
    	$sno1 = DB::connection('skoda_ecard')->select("select * from ecard_data where data_id='$id'");
    	//$name=$sno1;
    	//return $sno1;
    	return view('skodaecard.card', ['sno1'=>$sno1]);
    }
}
