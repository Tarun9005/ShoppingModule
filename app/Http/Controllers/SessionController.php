<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('guest',['except'=>'destroy']);
    }
	public function create(){

		return view('login');
	}

	public function checklogin(Request $request){
    	//authenticating the user

    	$credentials=$request->only('username','password');
    	//dd($credentials);
    	$var = auth()->attempt($credentials);

		  if(! $var)
    {
        // Why did $attempt fail? Email or password?
         return back(); // false
    }

     return redirect('/');
		}

		//return redirect('/');
	public function destroy(){
		auth()->logout();
		return redirect('/');
	}
}
