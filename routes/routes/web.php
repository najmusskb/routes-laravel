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

Route::get('/', function () {
    return view('welcome');
});

//  Example routes about section
Route::get('about',function(){
    return "Hello Laravel"; 
});



// Exaple parameter
Route::get("user/{U_id}",function($id){
    return $id;
});



// Exaple multiple parameter
Route::get('post/{post_id}/comment/{comment_id}',function
($post_id,$comment_id){
    return $post_id . $comment_id;
});  