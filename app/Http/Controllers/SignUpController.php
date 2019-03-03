<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SignUp;

class SignUpController extends Controller
{
    public function index() {
    	return view('register');
    }
    public function create(Request $request)

     {
    	// dd($request->name);
    	$data=new SignUp();
    	$data->name=$request->name;
    	$data->mobile=$request->mobile;
    	$data->email=$request->email;
    	$data->password=$request->password;
    	$data->confirm_password=$request->confirm_password;
    	$data->save();
    }
}
