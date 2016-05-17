<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="register-sigin-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="nekt-welcome">
                            <h3>Welcome To Needketing</h3>
                            <p>Our Objective is to develop a solution which bring service provider and customer closer.
                                Join Needketing It's Free.
                            </p>
                        </div>
                        <div class="nekt-brand-image">
                            <img src="{{ asset('assets/images/deal1.png') }}" alt="Needketing">
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-2">
                        <div class="form-section login">
                            <h2>Login</h2>
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
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-sign-in"></i>Login
                                        </button>

                                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="form-section oauth">
                            <p>Sign in with</p>
                            <span class="glyphicon glyphicon-facebook"></span>
                            <span class="glyphicon glyphicon-googleplus"></span>
                            <span class="glyphicon glyphicon-twitter"></span>
                        </div>
                        <div class="form-section signup">
                            <h2>Not Account Yet ? Sign up Here</h2>
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

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i>Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p>By signing up, you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a> including
                            </p>
                        </div>
                    </div><!-- col-lg-6 -->
                </div><!-- //row -->

                <div class="row">
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Privacy</a></li>
                        <li><a href="">@2016 needketing</a></li>
                    </ul>
                </div>
            </div><!-- //container -->
        </div><!-- //register-signin-page -->
    </body>
</html>