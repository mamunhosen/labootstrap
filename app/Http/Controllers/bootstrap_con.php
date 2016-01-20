<?php

namespace App\Http\Controllers;
use App\contactModel;
use DB;
use Input;
//use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class bootstrap_con extends Controller
{
    public function index(){
    //$users = DB::table('contactLaravel')->get();
        $users['users']=contactModel::orderBy('contact_id', 'desc')->paginate(5);
        return view('index', $users);
    }


    public function create(){

    	return view('create');
    }

    public function store(contactRequest $request){



       $Inputs=Input::all();



    
        /*$data=array(
            'contact_name'=>$Inputs["c_name"],
            'contact_number'=>$Inputs["c_number"],
            'contact_email'=>$Inputs["c_email"],
            
        );*/



    // contactModel::create($request->all($data));
     contactModel::create($request->all());

     
     return redirect('index');


}

    public function delete($contact_id){
    	if (isset($contact_id)) {

    		contactModel::where('contact_id', $contact_id)->delete();
    		return redirect('index');
    		//$record = labootstrap_model::find($contact_id);
    		/*if ($record) {

    			labootstrap_model::find($contact_id)->delete();
    			return redirect('index');
    			
    		}*/

    	}
    }
      public function edit($contact_id){
        $edit_contact = DB::table('contactLaravel')->where('contact_id',$contact_id)->get();

/*        var_dump($edit_contact);
        die();*/

        return view('edit',['editcontact' => $edit_contact[0]]);
    }


    public function update($contact_id){

       /* var_dump($contact_id);
        die();*/
        //$page=$_GET['page'];
        $contactName=Input::get('c_name');
        $contactNumber=Input::get('c_number');
        $contactEmail=Input::get('c_email');
        $updataData=array(
            'contact_name'=>$contactName,
            'contact_number'=>$contactNumber,
            'contact_email'=>$contactEmail,
            
        );

        $update=DB::table('contactLaravel')
            ->where('contact_id', $contact_id)
            ->update($updataData);

        /*var_dump($update);
        die();*/

        if ($update) {
            return redirect('index');
        }
    }

    public function debug($data){
       echo "<pre>";
       print_r($data);
       echo "</pre>";
       die();
    }
}

