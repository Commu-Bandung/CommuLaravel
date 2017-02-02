@extends('admin')

@section('title', '')

@section('content')
@include('errors/validation')


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">
                        Edit profile</h3>
                    <form class="form form-signup" role="form" method="POST" action="{{ url('/uptprofileadmin') }}">
                        {{ csrf_field() }}
                        {{-- <input name="_method" type="hidden" value="PUT"> --}}

                    @foreach($profiles as $profiles)
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">nama</span>
                            </span>
                            <input type="text" name="nama" class="form-control" value="{{ $profiles->nama }}" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">Email</span></span>
                            <input type="Text" name="email" class="form-control" value="{{ $profiles->email }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">password</span>
                            <input type="Text" name="password" class="form-control" value="{{ $profiles->password }}" required >
                        </div>
                    </div>
                    
               
                </div>
                <button type="submit" class="btn btn-sm btn-primary btn-block">
                    Save
                </button>    
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach



@stop