<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Cases;
class CasesController extends Controller
{

    public function index (){

         $case  = new Cases();
        $cases = $case::all();


    	return view('manage_cases', ['cases' => $cases] );
    }

    public function store(Request $request){

     	 $validatedData      = $request->validate([
     	 	'case_date'      => 'required|date_format:Y-m-d',
    		'case_time'      => 'required|date_format:H:i:s A',
    		'case_entry'     => 'required|string',
    		'case_type'      => 'required',
    		'case_desc'      => 'required|string',
    		'directory_name' => 'required|string',
    		'case_emp_note'  => 'required',
    		'case_status'    => 'required',
    		'case_proirity'  => 'required'

			 ]);


     	 $cases = new Cases();
         $cases->case_date      = $request->case_date;
     	 $cases->case_time      = $request->case_time; 
     	 $cases->case_entry 	= $request->case_entry;
     	 $cases->case_type      = $request->case_type;
     	 $cases->case_desc      = $request->case_desc;
     	 $cases->directory_name = $request->directory_name; 
     	 $cases->case_emp_note  = $request->case_emp_note;
     	 $cases->case_status    = $request->case_status;
     	 $cases->case_proirity  = $request->case_proirity;
     	 $cases->save();

     	 return redirect('/manage_cases');
     	/* if(dddd){
     	 return redirect('/manage_admin');
     	//dd($request);
    	//dd('123');
     	 }else{
		 return redirect('/manage_admin');

     	 }*/
     	 
    }
}

