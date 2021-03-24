<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FukushimaController extends Controller
{
    public function data(request $request)
{
	DB::connection('fukushima')->insert("insert into lottery_data (name, phone_number, email) values ('$request->name', '$request->phone_number', '$request->email')");

	return view('fukushima.share');
}

}
