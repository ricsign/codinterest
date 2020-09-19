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
            <a href="{{url('/public/getproblems/'.$problem->pterrid)}}" class="btn btn-secondary btn-sm">
                Return To Territory
            </a>
            {{--submission tip--}}
            <button class="btn btn-info btn-sm sub-tip" type="button" data-toggle="collapse" data-target="#sub-tip-text" aria-expanded="false" aria-controls="sub-tips-text">
                Submission Tips
            </button>
        </p>
        <div class="collapse" id="sub-tip-text">
            <div class="card card-body">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is a semi-monitored submission system, which means this system will not
                judge your submission based on your code but only on your final answer. Some problems may even not require program.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, in order for you to effectively improve your coding skills, you should use
                the expected algorithms and your code should meet the minimal complexity. Some problems
                are solvable with time complexity of O(2^n), but if the problem expects an O(n^3) solution,
                your program should not exceed that time complexity, but feel free to write an O(n^2logn) solution.
                Again, the submission system only judges your answer, not your actual program, but you
                should try your best to ace the problems without cheating and violation, and be self-disciplined.
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The format of submission is expected as following:
                <ol>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. If the problem has one or more inputs and one output, you should enter your answer without extra spaces or characters;</li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. If the problem has one or more inputs and multiple outputs, you should always seperate your answer with an underscore _, for example, if your answers to 5 inputs are [12,60,9,8,-1], the correct format of submission will be 12_60_9_8_-1;</li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. If the problem's answer is a boolean, please use 0 or 1 to respectively represent false or true. This is because true or false representation might vary in different languages, 0 and 1 are consistent for all languages. for example, if your answers to 4 inputs are [true,true,false,true], the correct format of submission will be 1_1_0_1;</li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Your answer should only be numbers, English alphabets, underscores and necessary spaces(If required).</li>
                </ol>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We wish you best luck.
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
