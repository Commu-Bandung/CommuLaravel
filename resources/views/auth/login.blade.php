@extends('layouts.app')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="text-center center-block">
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <a href="{{ 'auth/google' }}" class="btn"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <a href="{{ 'auth/facebook' }}" class="btn"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <a href="{{ 'auth/twitter' }}" class="btn"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
