<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideProjectController extends Controller
{
    public function guzzle_api_test(){
    	$client = new \GuzzleHttp\Client(); 
    	$result = $client->get('https://google.com');
    	$str = ($result->getBody()->getContents());
    	echo $str;
    }


    public function test(){
    	return view('sideproject.login');
    }

    public function check_login(){
    	return view('sideproject.index');
    }

    public function room(){
    	return view('sideproject.room');;
    }
}
