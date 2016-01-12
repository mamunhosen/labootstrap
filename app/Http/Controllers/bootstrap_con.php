<?php

namespace App\Http\Controllers;
use App\labootstrap_model;
use DB;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class bootstrap_con extends Controller
{
    public function index(){
    $users = DB::table('contactlaravel')->get();
    return view('index',['users' => $users]);
    }


    public function create(){

    	return view('create');
    }

    public function store(){
     $contactName=Input::get('c_name');
     $contactNumber=Input::get('c_number');
     $contactEmail=Input::get('c_email');
        $data=array(
            'contact_name'=>$contactName,
            'contact_number'=>$contactNumber,
            'contact_email'=>$contactEmail,
            
        );

        $response=labootstrap_model::create($data);
        if($response)
        {
            return redirect('index');
        }

    }

    public function delete($contact_id){
    	if (isset($contact_id)) {
    		$record = labootstrap_model::find($contact_id);
    		if ($record) {

    			labootstrap_model::find($contact_id)->delete();
    			return redirect('index');
    			
    		}
    	}
    }
}

