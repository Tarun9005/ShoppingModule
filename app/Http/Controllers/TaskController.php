<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TaskController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('auth', ['except' => ['index', 'yield']]);
    }



    public function index(){
    	return view('welcome');
    }

    public function yield(){
    	return view('store');

    }
    public function output(){
    	return view('cart');
    }
}
