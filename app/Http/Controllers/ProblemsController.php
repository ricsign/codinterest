<?php

namespace App\Http\Controllers;

use App\Models\Problems;
use Illuminate\Http\Request;

class ProblemsController extends Controller{
    public function getproblems($pterrid){
        $problems = Problems::get()->where('pterrid',$pterrid);
        return view('getproblems',compact('problems'));
    }

    public function getsingleproblem($pid){
        $problem = Problems::get()->where('pid',$pid)->first();
        if(!$problem) return redirect('/public/allproblems');
        return view('getsingleproblem',compact('problem'));
    }

}
