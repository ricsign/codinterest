<?php

namespace App\Http\Controllers;

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
}


