<!DOCTYPE html>
<html>
<head>
    <title>Welcome To Needketing</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}" />
    <link rel='shortcut icon' href='{{ asset('assets/images/favicon.png') }}' type='image/x-icon' />
</head>
<body>
<div class="register-sigin-page">
    <div class="container">
        <div class="row nkt-logo-image text-center">
            <img src=" {{ asset('assets/images/needketinglogo.png') }}" alt="Needketing" >
        </div>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="form-section login">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12">
                                <input type="password" class="form-control" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                    <a class="btn btn-link pull-right" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-login">
                            Login
                        </button>
                    </form>
                </div>
            </div><!-- col-lg-6 -->
        </div><!-- //row -->
    </div><!-- //container -->
</div><!-- //register-signin-page -->
</body>
</html>