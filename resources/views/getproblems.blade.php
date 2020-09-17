{{--This is the main area of all problems page, extending the root template--}}
@extends('root')
@section('main')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Problem ID</th>
            <th scope="col">Title</th>
            <th scope="col">Reward</th>
            <th scope="col">Total Acceptance</th>
        </tr>
        </thead>
        <tbody>
        @foreach($problems as $problem)
            <tr>
                <th scope="row">{{$problem->pid}}</th>
                <td><a href="{{url('/public/getsingleproblem/'.$problem->pid)}}">{{$problem->ptit}}</a></td>
                <td>{{$problem->preward}}</td>
                <td>{{$problem->pacc}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
