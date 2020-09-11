{{--Blade Template For All Pages--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('styles')
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('styles/root.css')}}">
</head>
<body>
    @include('header')
    <div class="main">
        @yield('main')
    </div>
    @include('footer')
</body>
@include('scripts')
</html>
