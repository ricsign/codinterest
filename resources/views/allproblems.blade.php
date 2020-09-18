{{--This is the main area of all problems page, extending the root template--}}
@extends('root')
@section('main')
    <link rel="stylesheet" href="{{asset('styles/allproblems.css')}}">

    <h1>Problem Set</h1>

    <div class="card-deck card-deck-1">
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/site/terr1.jpg')}}" alt="Plain Picture" height="43%">
            <div class="card-body">
                <h5 class="card-title">Plain</h5>
                <h6 class="card-subtitle mb-2 text-muted">Territory 1</h6>
                <p class="card-text">Fundamentals. This is where dream starts. This territory encompasses basic conditionals & loops and other fundamental computer science ideas.</p>
                <a href="{{url('/public/getproblems/1')}}" class="btn btn-primary">Explore Plain</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/site/terr2.jpg')}}" alt="River Picture" height="43%">
            <div class="card-body">
                <h5 class="card-title">River</h5>
                <h6 class="card-subtitle mb-2 text-muted">Territory 2</h6>
                <p class="card-text">Hash Table, Sorting & Searching. This territory includes some important techniques may be used in daily life & competitive programming. </p>
                <a href="{{url('/public/getproblems/2')}}" class="btn btn-primary">Explore River</a>
            </div>
        </div>
    </div>

    <div class="card-deck card-deck-2">
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/site/terr3.jpg')}}" alt="Mountain Picture" height="43%">
            <div class="card-body">
                <h5 class="card-title">Mountain</h5>
                <h6 class="card-subtitle mb-2 text-muted">Territory 3</h6>
                <p class="card-text">Tree & Graph. This territory is a mountain that every programmer must conquer, it's essential, techniques such as recursion, traversal and Objected-Oriented Programming may be used.</p>
                <a href="{{url('/public/getproblems/3')}}" class="btn btn-primary">Explore Mountain</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/site/terr4.jpg')}}" alt="Desert Picture" height="43%">
            <div class="card-body">
                <h5 class="card-title">Desert</h5>
                <h6 class="card-subtitle mb-2 text-muted">Territory 4</h6>
                <p class="card-text">Dynamic Programming & Memoization. This territory is full of danger. You might realize how inefficient naive recursion is, dynamic programming is a crucial technique to reduce the time complexity.</p>
                <a href="{{url('/public/getproblems/4')}}" class="btn btn-primary">Explore Desert</a>
            </div>
        </div>

    </div>

    <div class="card-deck card-deck-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/site/terr5.jpg')}}" alt="Plateau Picture" height="43%">
            <div class="card-body">
                <h5 class="card-title">Plateau</h5>
                <h6 class="card-subtitle mb-2 text-muted">Territory 5</h6>
                <p class="card-text">Greedy & Mathematics. The explorer with power of strong logical reasoning shall enter. When you finish this territory where mathematics and computer science intersects, you will realize how beautiful this subject is.</p>
                <a href="{{url('/public/getproblems/5')}}" class="btn btn-primary">Explore Plateau</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="{{asset('imgs/site/terr6.jpg')}}" alt="Ocean Picture" height="43%">
            <div class="card-body">
                <h5 class="card-title">Ocean</h5>
                <h6 class="card-subtitle mb-2 text-muted">Territory 6</h6>
                <p class="card-text">Extensive Topics. This is the territory where extensive topics are introduced. Some examples to that are: Euler's path, Euler's circuit, A* Search, advanced data structures and etc.</p>
                <a href="{{url('/public/getproblems/6')}}" class="btn btn-primary">Explore Ocean</a>
            </div>
        </div>
    </div>
@endsection
