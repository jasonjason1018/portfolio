<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KnorrController extends Controller 
{
    

		public function recipelist(){
			$sno = DB::connection('knorr')->select('select * from list_picture where type = 1');
			

			$sno1 = DB::connection('knorr')->select('select * from list_picture where type = 2');
			
			
			$sno2 = DB::connection('knorr')->select('select * from list_picture where type = 3');
			return view('knorr.recipelist', ['sno'=>$sno, 'sno1'=>$sno1, 'sno2'=> $sno2]);
		}




		public function sales(){
			$product = DB::connection('knorr')->select('select * from product_description');
			 return view('knorr.sales', ['product'=>$product]);
		}



		public function recipe1($id){
		$sno1 = DB::connection('knorr')->select('select * from list_picture');	
		$sno = DB::connection('knorr')->select( "select * from list_data where pic_sno = '$id' ");

		

			return view('knorr.recipe1', ['sno'=>$sno, 'sno1'=>$sno1]);
		}





		public function recipe2($id){
			$sno1 = DB::connection('knorr')->select('select * from list_picture');
			$sno = DB::connection('knorr')->select("select * from list_data where pic_sno = '$id'");
			return view('knorr.recipe2', ['sno'=>$sno, 'sno1'=>$sno1]);
		}


		public function result(request $request){

			$sno1 = DB::connection('knorr')->select('select * from list_picture');
			$Q1 = $request->number;
			$Q2 = $request->Q2_number;
			$sno = DB::connection('knorr')->select("select * from list_picture ORDER BY RAND() LIMIT 3");
			$sno2 = DB::connection('knorr')->select("select * from list_picture where Q1 = '$Q1' AND Q2 = '$Q2'");
			return view('knorr.result', ['Q1'=>$Q1, 'Q2'=>$Q2, 'sno1'=>$sno1, 'sno'=>$sno, 'sno2'=>$sno2]);
		}



		public function congratulations(request $request){
				$name=$request->name;
				$gender=$request->ipt_sex;
				$email=$request->email;
				$phone_number=$request->phone;
				$age=$request->age;
				$people=$request->ipt_people;
				$habit=$request->ipt_times;
				$preference=implode(",",$request->ipt_type);
				$news=$request->ipt_info;
				if($name!=NULL && $gender!=NULL && $email!=NULL && $phone_number!=NULL && $age!=NULL && $people!=NULL && $habit!=NULL && $preference!=NULL && $news!=NULL){
				DB::connection('knorr')->insert("insert into lottery_data (name, gender, email, phone_number, age, people, habit, preference, news) values ('$name', '$gender', '$email', '$phone_number', '$age', '$people', '$habit', '$preference', '$news')");
				return view('knorr.congratulations');
			}else{
				return redirect('form');
							}
											}



		






		}




