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

// public page route
// pages that doesn't need a signed account to view
Route::group(['prefix'=>'public'],function () {
    Route::get('index',function(){
        return view('index');
    });
    Route::get('signup',function (){
        return view('signup');
    });
    Route::get('signin',function (){
        return view('signin');
    });
});

// protected page route
// pages that must need a signed account to view
// Middleware will be implemented
Route::group(['prefix'=>'protected'],function (){
    // route of all problems page
    Route::get('allproblems',function (){
        return view('allproblems');
    });
});
