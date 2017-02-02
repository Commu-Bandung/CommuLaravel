@extends('layouts.app')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

@include('errors/validation')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register Perusahaan</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerperusahaan') }}">
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
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus>

                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
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

                        

                        {{-- <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}"> --}}
                        <div class="form-group">                        
                            <label for="name" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-home">
                                        </i>
                                    </div>
                                    <input id="name" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                    @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
