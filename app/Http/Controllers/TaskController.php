<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
class TaskController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('auth', ['except' => ['index', 'yield']]);
    }



    public function index(){

        $image=Image::take(4)->get();

        return view('welcome',compact('image'));
    }

    public function yield(){

        $prod = Image::all();

        return view('store',compact('prod'));

    }
    public function output(){
    	return view('cart');
    }
}
