@extends('welcome')

@section('title', '')

@section('content')
@include('errors/validation')


<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">
                        Edit a train</h3>
                    <form class="form form-signup" role="form" method="POST" action="{{ url('/uptprofile') }}">
                        {{ csrf_field() }}

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
                            <span class="input-group-addon">komunitas</span></span>
                            <input type="Text" name="komunitas" class="form-control" value="{{ $profiles->komunitas }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">kampus</span>
                            <input type="Text" name="kampus" class="form-control" value="{{ $profiles->kampus }}" required >
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">alamat</span></span>
                            <textarea name="alamat" class="form-control"  required>{{ $profiles->alamat }}</textarea>
                        </div>
                    </div>
             
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">deskripsi</span></span>
                            <textarea name="deskripsi" class="form-control" required>{{ $profiles->deskripsi }}</textarea>
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