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
                things just don't turn out the way you wished to be.
                But here, you can find your motivation,
                making programming like a fun adventure,
                and explore the infinite potential inside of you.
            </p>
        </div>
    </div>

    {{--Intro To The Website--}}
    <div class="container container-fluid">
        <img class="section-img" src="{{asset('imgs/site/index1.svg')}}" alt="">
        <h3 class="section-title">Modules Coding</h3>
        <p class="section-text">
            Lost directions? Don't know where to start? Codinterest starts from basic conditionals and loops,
            dives deep into more advanced topics such as graphs, trees and etc. Don't worry, you don't need
            to find a specific topic in a humongous problem set, Codinterest divides these topics in modules.
            Module learning is proven to be more a more effective learning technique.
            Solving a problem is like an adventure, you will feel the accomplishment comes to you when you see a big AC.
        </p>
        <img class="section-img" src="{{asset('imgs/site/index2.svg')}}" alt="">
        <h3 class="section-title">Semi-Monitored Feature</h3>
        <p class="section-text">
            Feeling stressed? Your Python program exceeds the time complexity again? Haven't learned other languages?
            Codinterest uses a semi-monitored submission system, which means this system will not
            judge your submission based on your code but only on your final answer.
            In this way you will have more freedom, and spend more time on algorithms and data structures themselves
            than programming linguistics. All you need to do is follow the expected complexity and algorithms.
        </p>
        <img class="section-img" src="{{asset('imgs/site/index3.svg')}}" alt="">
        <h3 class="section-title">Open Sources</h3>
        <p class="section-text">
            This is the major project of Computer Science 30.
            The majority of materials are based on my own knowledge. All references will be attributed and listed.
            It's an open sources and free website made using php(laravel) and blade. The entire website is based on MVC design model.
            The website does not use website generating using WordPress, DreamWeaver or etc.
            I'm very happy to take advices and make changes. Please
            feel free to visit code on github and request a pull.
        </p>
        <img class="section-img" src="{{asset('imgs/site/index4.svg')}}" alt="">
        <h3 class="section-title">Pure Experiences Share</h3>
        <p class="section-text">
            Codinterest is an introductory resource to computer sciences, algorithms & data structures and competitive programming.
            I'll try my best to add more and more problems and solutions using modern C++. I will refrain
            from using complex or vintage C++ idiosyncratic features and try my best to accommodate users using Java, Python, C, and other
            languages. The main focus of Codinterest is based on pure personal experiences share instead of frustration of linguistics.
        </p>
    </div>




@endsection
