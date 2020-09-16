{{--This is the main area of index page, extending the root template--}}
@extends('root')
@section('main')
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('styles/index-main.css')}}">

    @unless(empty(session()->get('success_signin')))
        <div class="alert alert-success alert-dismissible fade show">{{session()->get('success_signin')}}</div>
    @endunless
    {{--jumbotron--}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome To Codinterest!</h1>
            <p class="lead">
                Life is like programming,
                sometimes you lose direction,
                sometimes you lose your energy and motivation,
                you felt tired and exhausted,
                no matter how hard you try,
                how many loops you've iterated,
                things just don't turn out the way it supposed to be.
                But here, you can find your motivation,
                making programming like a fun adventure,
                and explore the infinite potential inside of you.
            </p>
        </div>
    </div>

    {{--Intro To The Website--}}
    <img src="">
    <div class="container container-fluid">
        <img src="">
        <p>
            Life is like programming,
            sometimes you lose direction,
            sometimes you lose your energy and motivation,
            you felt tired and exhausted,
            no matter how hard you try,
            how many loops you've iterated,
            things just don't turn out the way it supposed to be.
            But here, you can find your motivation,
            making programming like a fun adventure,
            and explore the infinite potential inside of you.
        </p>
        <img src="">
        <p>
            Life is like programming,
            sometimes you lose direction,
            sometimes you lose your energy and motivation,
            you felt tired and exhausted,
            no matter how hard you try,
            how many loops you've iterated,
            things just don't turn out the way it supposed to be.
            But here, you can find your motivation,
            making programming like a fun adventure,
            and explore the infinite potential inside of you.
        </p>
        <img src="">
        <p>
            Life is like programming,
            sometimes you lose direction,
            sometimes you lose your energy and motivation,
            you felt tired and exhausted,
            no matter how hard you try,
            how many loops you've iterated,
            things just don't turn out the way it supposed to be.
            But here, you can find your motivation,
            making programming like a fun adventure,
            and explore the infinite potential inside of you.
        </p>
    </div>




@endsection
