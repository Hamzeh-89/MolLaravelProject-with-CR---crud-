<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Admin;

class AdminController extends Controller
{
    public function index (){
        $admin  = new Admin();
        $admins = $admin::all();

        //dd($admins); 


    	return view('manage_admin',[ 'admins' => $admins ]);
    }

     public function store(Request $request){

     	 $validatedData      = $request->validate([
     	 	'admin_email'    => 'required|email|unique:users,email',
    		'admin_password' => 'required_with:password|max:32|min:6',
    		'admin_fullname' => 'required|string',
    		'admin_dept'     => 'required'
			 ]);


     	 $admin = new Admin();
         $admin->admin_email    = $request->admin_email;
     	 $admin->admin_password = $request->admin_password; 
     	 $admin->admin_fullname = $request->admin_fullname;
     	 $admin->admin_dept     = $request->admin_dept;
     	 $admin->save();

     	 return redirect('/manage_admin');
     	/* if(dddd){
     	 return redirect('/manage_admin');
     	//dd($request);
    	//dd('123');
     	 }else{
		 return redirect('/manage_admin');

     	 }*/
     	 
    }
}
