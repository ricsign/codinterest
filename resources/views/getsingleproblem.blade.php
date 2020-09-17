{{--This is the main area of all problems page, extending the root template--}}
@extends('root')
@section('main')
    <link rel="stylesheet" href="{{asset('styles/getsingleproblem.css')}}">
    <a href="#">
        <button class="btn btn-info btn-sm sub-tip">Submission Tips</button>
    </a>
    {{--problem description--}}
    <div id="description-container">
    {!! $problem->pdesc !!}
    </div>
    {{--submission area--}}

    {{--return to the main menu--}}
    <a href="{{url('/public/getproblems/'.$problem->pterrid)}}">
        <button class="btn btn-primary"> Return To Territory</button>
    </a>
@endsection
