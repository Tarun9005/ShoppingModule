<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','TaskController@index');
Route::get('/login','SessionController@create');
Route::post('/login','SessionController@checklogin');
Route::get('/logout','SessionController@destroy');

Route::get('/signup','RegistrationController@create');
Route::post('/signup','RegistrationController@store');

Route::get('/store','TaskController@yield');
Route::post('/store/{id}/{name}','TaskController@adding');


Route::get('/cart/{cart}','TaskController@output');


//admin view
Route::get('/upload','ImageController@index');
Route::post('/save','ImageController@save');


