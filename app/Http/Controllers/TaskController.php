<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Cart;
use DB;
use Redirect;
use Session;
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
        //$index=User::all();


        return view('store',compact('prod'));

    }

    public function adding($id, $name){

       $task=Image::find($id);
       $des=$task->description;
       $prs=$task->price;
       $img=$task->image;
        $res=User::find($name);
        $useid=$res->id;

        $cart= new Cart;
        $cart->user_id= $useid;
        $cart->description= $des;
        $cart->price= $prs;
        $cart->image= $img;

        $cart->save();

       
       Session::flash('message', "Product added successfully");
return Redirect::back();

     

         
   }


    public function output($no){

        $out=User::find($no);
        $outs= $out->id;
        $final=Cart::where('user_id', $outs)->get();
        //dd($final);
    	return view('cart',compact('final'));
    }
}
