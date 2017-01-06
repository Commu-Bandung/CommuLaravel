@extends('layouts.app')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

@include('errors/validation')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        {{-- <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user">
                                        </i>
                                    </div>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope">
                                        </i>
                                    </div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock">
                                        </i>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>                        

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-lock">
                                        </i>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="form-group{{ $errors->has('komunitas') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="name" class="col-md-4 control-label">Komunitas</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-users">
                                        </i>
                                    </div>
                                    <input id="name" type="text" class="form-control" name="komunitas" value="{{ old('komunitas') }}" required autofocus>

                                    @if ($errors->has('komunitas'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('komunitas') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('kampus') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="name" class="col-md-4 control-label">Kampus</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-building">
                                        </i>
                                    </div>
                                    <input id="name" type="text" class="form-control" name="kampus" value="{{ old('kampus') }}" required autofocus> 

                                    @if ($errors->has('kampus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('kampus') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('alamatKampus') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="name" class="col-md-4 control-label">Alamat Kampus</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-home">
                                        </i>
                                    </div>
                                    <input id="name" type="text" class="form-control" name="alamatKampus" value="{{ old('alamatKampus') }}" required autofocus>

                                    @if ($errors->has('alamatKampus'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamatKampus') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="name" class="col-md-4 control-label">Deskripsi</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-pencil-square-o">
                                        </i>
                                    </div>
                                    <textarea id="name" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}"required autofocus></textarea>

                                    @if ($errors->has('deskripsi'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('deskripsi') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
