{{--This is the main area of all problems page, extending the root template--}}
@extends('root')
@section('main')
    <link rel="stylesheet" href="{{asset('styles/getsingleproblem.css')}}">

    {{--problem description--}}
    <div id="description-container">
        {!! $problem->pdesc !!}
    </div>

    {{--middle area--}}
    <div>
        <p>
            {{--return to the main menu--}}
            <a href="{{url('/public/getproblems/'.$problem->pterrid)}}">
                <button class="btn btn-secondary btn-sm"> Return To Territory</button>
            </a>
            {{--submission tip--}}
            <button class="btn btn-info btn-sm sub-tip" type="button" data-toggle="collapse" data-target="#sub-tip-text" aria-expanded="false" aria-controls="sub-tips-text">
                Submission Tips
            </button>
        </p>
        <div class="collapse" id="sub-tip-text">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>
    </div>

    {{--submission area--}}
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Your Answer</span>
        </div>
        <textarea class="form-control answer" aria-label="With textarea"></textarea>
        <p class="input-tip">
            *Please make sure your answer matches the desired answer format,
            if you're not sure, please click the submission tips to find out more details.<br>
            You have 10 chances left.
        </p>
        <button class="btn btn-primary btn-lg btn-block submit">Submit</button>
    </div>
@endsection
