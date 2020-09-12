{{--Sign Up Page--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    @include('styles')
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('styles/sign.css')}}">
    <link rel="stylesheet" href="{{\Illuminate\Support\Facades\URL::asset('styles/signup.css')}}">
</head>
<body>
    <div class="sign-container">
        <form>
            {{csrf_field()}}
            <h2 class="sign-header">Sign Up</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username_123">
                <small class="form-text text-muted">Username may only use the combination English alphabets, numbers and underscore '_' with length 3~20</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password">
                <small class="form-text text-muted">A strong password must have at least 6 characters</small>
            </div>
            <div class="form-group">
                <label for="repassword">Confirm Password</label>
                <input type="password" class="form-control" id="repassword">
                <small class="form-text text-muted">Confirm Your Password</small>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="example@123.com">
                <small class="form-text text-muted">A valid email that is able to receive activation link</small>
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
            <p>Already have an account? <a href="{{url('/public/signin')}}">Click here</a> to sign in.</p>
        </form>
    </div>
</body>
@include('scripts')
</html>
