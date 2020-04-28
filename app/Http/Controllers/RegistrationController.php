<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    //
    public function create(){
    	return view('signup');
    }

    public function store(){

    	$this->validate(request(),[
    		'name'=>'required',
    		'email'=>'required|email',
    		'username'=>'required',
    		'password'=>'required'
    	]);

    	$user=User::create(request(['name','email','username','password']));

    	//sign them in

    	auth()->login($user);

    	return redirect('/');
    }
}
