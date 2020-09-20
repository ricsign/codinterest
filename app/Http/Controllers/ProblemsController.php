<?php

namespace App\Http\Controllers;

use App\Models\Problems;
use App\Models\Submission;
use Illuminate\Http\Request;

class ProblemsController extends Controller{
    public function getproblems($pterrid){
        $solved = array();
        $problems = Problems::get()->where('pterrid',$pterrid);
        $solved_raw = Submission::where([
            ['uid','=',session()->get('user')->uid],
            ['status','=',1]
        ])->get('pid')->toArray();

        // convert raw array
        for ($i=0;$i<count($solved_raw);$i++)
            array_push($solved,$solved_raw[$i]['pid']);
        return view('getproblems',compact('problems','solved'));
    }

    public function getsingleproblem($pid){
        $problem = Problems::get()->where('pid',$pid)->first();
        if(!$problem) return redirect('/public/allproblems');

        // check if user is already accepted on this single problem
        $ac = Submission::where([
            ['pid','=',$pid],
            ['uid','=',session()->get('user')->uid],
            ['status','=',1]
        ])->first();
        if($ac) $is_ac = true;
        else $is_ac = false;
        return view('getsingleproblem',compact('problem','is_ac'));
    }

    public function solution($pid){
        $uid = session()->get('user')->uid;
        // check if user is accepted
        if(!Submission::where([['uid','=',$uid], ['pid','=',$pid], ['status','=',1]])->first())
            return redirect('/public/allproblems');

        $problem = Problems::where('pid',$pid)->first();
        if(!$problem) return redirect('/public/allproblems');
        return view('solution',compact('problem'));
    }

}
