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

Route::get('/',function (){
    return redirect(url('/public/index'));
});


// public page route
// pages that doesn't need a signed account to view
Route::group(['prefix'=>'public'],function () {
    Route::get('index',function(){
        return view('index');
    });
    Route::get('signup','App\Http\Controllers\SignController@signup');
    Route::get('signin','App\Http\Controllers\SignController@signin');

    // processing request of signup and sign in
    Route::post('dosignup','App\Http\Controllers\SignController@dosignup');
    Route::post('dosignin','App\Http\Controllers\SignController@dosignin');


    // email activation
    Route::get('emailactivation','App\Http\Controllers\SignController@emailactivation');
//    Route::get('lol',function (){return view('nonsite.emailactivation');}); //testing

    // vercode route
    Route::get('captcha/vercode','App\Http\Controllers\SignController@vercode');

    // route of all problems page
    Route::get('allproblems',function (){
        return view('allproblems');
    });

    // route of problems grouped by its pterrid
    Route::get('getproblems/{pterrid}','App\Http\Controllers\ProblemsController@getproblems')
    ->where('pterrid','[123456]');

    // route of a single problem
    Route::get('getsingleproblem/{pid}','App\Http\Controllers\ProblemsController@getsingleproblem')
        ->where('pid','[0-9]+');

    // route of myaccount
    Route::get('myaccount/{uid}','App\Http\Controllers\InfoController@myaccount')
        ->where('uid','[0-9]+');

});

// protected page route
// pages that must need a signed account to view
// Middleware will be implemented
Route::group(['prefix'=>'protected','middleware'=>'checksigned'],function (){

    //processing signout
    Route::get('signout','App\Http\Controllers\SignController@signout');

    //processing submission
    Route::post('submission','App\Http\Controllers\SubmissionController@submission');

    //get solution page
    Route::get('solution/{pid}','App\Http\Controllers\ProblemsController@solution')->where('pid','[0-9]+');

});
