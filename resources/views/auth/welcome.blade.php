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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="nekt-welcome">
                            <h2>Welcome To Needketing</h2>
                            <p>Our Objective is to develop a solution which bring service provider and customer closer.
                                Join Needketing It's Free.
                            </p>
                        </div>
                        <div class="nekt-brand-image">
                            <img src="{{ asset('assets/images/deal1.png') }}" alt="Needketing" class="img-responsive hide-xs">
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2">
                        <div class="form-section login">
                            <h4>Login</h4>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
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
                        <div class="form-section oauth text-center">
                            <h4>Sign in with</h4>
                            <a href="{{ url('redirect/facebook') }}"><i class="ion ion-social-facebook"></i></a>
                            <a href="{{ url('redirect/google') }}"><i class="ion ion-social-googleplus"></i></a>
                            <a href="{{ url('redirect/twitter') }}"><i class="ion ion-social-twitter"></i></a>
                        </div>
                        <div class="form-section signup">
                            <h4>Not Account Yet ? Sign up Here</h4>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                                {!! csrf_field() !!}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}">

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="username" placeholder="Username " value="{{ old('username') }}">

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <input type="hidden" value="1" name="role_id" id="role_id" />

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input type="email" class="form-control" name="email" placeholder="Email " value="{{ old('email') }}">

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

                                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-signup">
                                    Sign Up
                                </button>
                            </form>
                            <p>By signing up, you agree to the <a href="{{ URL::to('terms') }}">Terms of Service</a> and <a href="{{ URL::to('privacy') }}">Privacy Policy</a>
                            </p>
                        </div>
                    </div><!-- col-lg-6 -->
                </div><!-- //row -->

                <div class="row">
                    <p class="text-center">
                        <a href="{{ URL::to('about') }}">About</a> |
                        <a href="{{ URL::to('terms') }}">Terms</a> |
                        <a href="{{ URL::to('privacy') }}">Privacy</a> |
                        &copy 2016 needketing
                    </p>
                </div>
            </div><!-- //container -->
        </div><!-- //register-signin-page -->
    </body>
</html>