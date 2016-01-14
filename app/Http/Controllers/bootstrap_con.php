<?php

namespace App\Http\Controllers;
use App\labootstrap_model;
use DB;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class bootstrap_con extends Controller
{
    public function index(){
    $users = DB::table('contactlaravel')->get();
    return view('index',['users' => $users]);
    }


    public function create(){

    	return view('create');
    }

    public function store(/*Request $request*/){

     /*$this->validate($request, [
    'contact_name' => 'required|unique:contactlaravel|max:25|min:4',
    'contact_number' => 'required|max:16|min:13',
    'contact_email' => 'valid',
    ]);*/
     $Inputs=Input::all();
/*     $contactNumber=Input::get('c_number');
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

    }*/
    $rules = array(
        'contact_name' =>'required|min:5|max:25' , 
        'contact_number' =>'required|min:11|max:16' ,
        'contact_email' =>'email' ,

);

    $validation=Validator::make($Inputs,$rules);

    if ($validation->fails()) {
         return redirect('create')->with_errors($validation->errors);
    }

}

    public function delete($contact_id){
    	if (isset($contact_id)) {

    		labootstrap_model::where('contact_id', $contact_id)->delete();
    		return redirect('index');
    		//$record = labootstrap_model::find($contact_id);
    		/*if ($record) {

    			labootstrap_model::find($contact_id)->delete();
    			return redirect('index');
    			
    		}*/

    	}
    }
      public function edit($contact_id){
        $edit_contact = DB::table('contactlaravel')->where('contact_id',$contact_id)->get();

/*        var_dump($edit_contact);
        die();*/

        return view('edit',['editcontact' => $edit_contact[0]]);
    }


    public function update($contact_id){

       /* var_dump($contact_id);
        die();*/
        $contactName=Input::get('c_name');
        $contactNumber=Input::get('c_number');
        $contactEmail=Input::get('c_email');
        $updataData=array(
            'contact_name'=>$contactName,
            'contact_number'=>$contactNumber,
            'contact_email'=>$contactEmail,
            
        );

        DB::table('contactlaravel')
            ->where('contact_id', $contact_id)
            ->update($updataData);

        /*var_dump($update);
        die();*/

        if ($update) {
            return redirect('index');
        }
    }
}

