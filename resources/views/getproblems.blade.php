{{--This is the main area of all problems page, extending the root template--}}
@extends('root')
@section('main')
    <link rel="stylesheet" href="{{asset('styles/getproblems.css')}}">

    <h2 class="title">Problems In Current Territory</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Problem ID</th>
            <th scope="col">Title</th>
            <th scope="col">Reward</th>
            <th scope="col">Total Acceptance</th>
            <th scope="col">AC</th>
        </tr>
        </thead>
        <tbody>
        @foreach($problems as $problem)
            <tr>
                <th scope="row">{{$problem->pid}}</th>
                <td><a href="{{url('/public/getsingleproblem/'.$problem->pid)}}">{{$problem->ptit}}</a></td>
                <td>{{$problem->preward}}</td>
                <td>{{$problem->pacc}}</td>
                <td></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
