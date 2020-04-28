<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
	public function create(){

		return view('login');
	}

	public function store(){
    	//authenticating the user

		if(!auth()->attempt(request(['email','name','username','password']))){
			return back();

		}
		return redirect('/');
	}
	public function destroy(){
		auth()->logout();
		return redirect('/');
	}
}
