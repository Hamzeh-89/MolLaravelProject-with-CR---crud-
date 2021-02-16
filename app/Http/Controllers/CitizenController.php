<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Citizen;

class CitizenController extends Controller
{

   public function index (){


     $citizen  = new Citizen();
     $citizens = $citizen::all();


    	return view('manage_citizen',  ['citizens'=> $citizens] );
    }

     public function store(Request $request){

     	 $validatedData      = $request->validate([
     	 	'national_id'    => 'required|digits:10|numeric',
    		'citizen_password' => 'required_with:password|max:32|min:6',
    		'first_name' => 'required|string',
    		'second_name'     => 'required|string',
    		'middle_name' => 'required|string',
    		'last_name' => 'required|string',
    		'gender' => 'required',
    		'Nationality' => 'required',
    		'city' => 'required',
    		'address' => 'required|string',
    		'mobile'  => 'required'

			 ]);


     	 $citizen = new Citizen();
         $citizen->national_id      = $request->national_id;
     	 $citizen->citizen_password = $request->citizen_password; 
     	 $citizen->first_name       = $request->first_name;
     	 $citizen->second_name      = $request->second_name;
     	 $citizen->middle_name      = $request->middle_name;
     	 $citizen->last_name        = $request->last_name;
     	 $citizen->gender           = $request->gender;
     	 $citizen->Nationality      = $request->Nationality;
     	 $citizen->city             = $request->city;
     	 $citizen->address          = $request->address;
     	 $citizen->mobile           = $request->mobile;
     	 $citizen->save();

     	 return redirect('/manage_citizen');
     	/* if(dddd){
     	 return redirect('/manage_admin');
     	//dd($request);
    	//dd('123');
     	 }else{
		 return redirect('/manage_admin');

     	 }*/
     	 
    }
}

