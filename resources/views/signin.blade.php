{{--Sign Up Page--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    @include('styles')
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('styles/sign.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('styles/signin.css')}}">
</head>
<body>
    <div class="sign-container">
        <form>
            {{csrf_field()}}
            <h2 class="sign-header">Sign In</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="vercode">Verification Code</label>
                <input type="text" class="form-control vercode" id="vercode">
                {{-- <img src="">--}}
                <small class="form-text text-muted">To verify you as a human</small>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
            <br>
            <small class="form-text text-muted">** We'll never share your information with other individuals or organizations.</small>
            <br>
            <p>Doesn't have an account? <a href="{{url('/public/signup')}}">Click here</a> to sign up.</p>
        </form>
    </div>
</body>
@include('scripts')
</html>
