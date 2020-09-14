<?php

namespace App\Http\Controllers;

use App\Models\UserSign;
use Dotenv\Validator;
use Illuminate\Http\Request;

// use captcha vercode namespace
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;

class SignController extends Controller
{
    public function signup(){
        return view('signup');
    }

    public function signin(){
        return view('signin');
    }

    public function vercode(){
        $phrase = new PhraseBuilder();
        $code = $phrase->build(6); // 6-digits vercode
        $builder = new CaptchaBuilder($code,$phrase);
        // set properties
        $builder->setBackgroundColor(random_int(230,255),random_int(230,255),random_int(230,255));
        $builder->setMaxAngle(10);
        $builder->setMaxBehindLines(3);
        $builder->setMaxFrontLines(3);

        $builder->build($width=180,$height=50,$font=null);
        // retrieve vercode's phrase
        $phrase = $builder->getPhrase();
        // store in session
        \session()->flash('vercode',$phrase);
        // generate code as jpeg
        header('Cache-Control:no-cache,must-revalidate');
        header('Content-Type:image/jpeg');
        $builder->output();
    }

    public function dosignup(Request $request){
        // 1. validate user's input
        $session_vercode = strtoupper(\request()->session()->get('vercode')); // session vercode uppercased
        $request->merge(['vercode'=>strtoupper($request->input('vercode'))]); // make vercode user input uppercased

        $this->validate($request,[
            'username'=>'required|min:3|max:20|regex:/^[\w]*$/',
            'password'=>'required|min:6',
            'repassword'=>'required|same:password',
            'email'=>'required|email',
            'vercode'=>'required|min:6|max:6|alpha_num|in:'.$session_vercode,
        ]);
        // 2. write into the database
//        $a = UserSign::all();
//        echo $a;
        // 3. send activation link
        // 4. redirect to signin page
        return $request->toArray();
    }
}


