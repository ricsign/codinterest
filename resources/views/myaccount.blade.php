{{--This is the main area of index page, extending the root template--}}
@extends('root')
@section('main')
    <link rel="stylesheet" href="{{asset('styles/myaccount')}}">
    <div class="main-block">
        <h1>User Profile</h1>
        {{--Please redesign this!--}}
        <ul>
            <li>Your ID: {{$user->uid}}</li>
            <li>Your Username: {{$user->username}}</li>
            <li>Your Coins: {{$user->user_info->usercoins}}</li>
            <li>Your Total AC: {{$user->user_info->userac}}</li>
            <li>Your Total Submission: {{$user->user_info->usersubmission}}</li>
        </ul>
        <button class="btn btn-danger btn-lg" onclick="conf()">Sign Out</button>
    </div>

    <script>
        function conf() {
            if(confirm('Are you sure to sign out? Your session will be closed.'))
                location = '/protected/signout';
        }
    </script>
@endsection
