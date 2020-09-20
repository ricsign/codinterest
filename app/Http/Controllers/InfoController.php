<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    // assumed user is signed in, this was checked by middleware checksigned
    public function myaccount(){
        $user = session()->get('user');
        // here invoke userinfo again is because our session doesn't change once after signing in,
        // so whenever user's information changes, we need to capture it
        $user_info = UserInfo::where('uid',$user->uid)->first();
        return view('myaccount',compact('user','user_info'));
    }
}
