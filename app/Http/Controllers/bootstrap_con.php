<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class bootstrap_con extends Controller
{
    public function index(){

    	return view('index');
    }


    public function create(){

    	return view('create');
    }

    public function store(){
     
     return view('store');

    }
}
