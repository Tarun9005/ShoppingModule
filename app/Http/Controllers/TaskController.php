<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Cart;
use DB;
use Redirect;
use Session;
use Auth;
class TaskController extends Controller
{
    //
    public function __construct(){

    	$this->middleware('auth', ['except' => ['index', 'yield']]);
    }



    public function index(){

        $image=Image::take(4)->get();
       
        //dd($currentuserid);

        return view('welcome',compact('image'));
    }

    public function yield(){

        $prod = Image::all();
        //$index=User::all();


        return view('store',compact('prod'));

    }

    public function adding($id){

       $task=Image::find($id);
       $des=$task->description;
       $prs=$task->price;
       $img=$task->image;
        //$res=User::find($name);
        //$useid=$res->id;
       $useid = Auth::user()->id;

        $cart= new Cart;
        $cart->user_id= $useid;
        $cart->description= $des;
        $cart->price= $prs;
        $cart->image= $img;

        $cart->save();

       
       Session::flash('message', "Product added successfully");
return Redirect::back();

     

         
   }


    public function output(){

        //$out=User::find($no);
        //$outs= $out->id;
         $currentuserid = Auth::user()->id;
        $final=Cart::where('user_id', $currentuserid)->get();
        //dd($final);
    	return view('cart',compact('final'));
    }
}
