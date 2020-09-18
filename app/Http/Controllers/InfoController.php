<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    // assumed user is signed in, this was checked by middleware checksigned
    public function myaccount(){
        $user = session()->get('user');
        return view('myaccount',compact('user'));
    }
}
