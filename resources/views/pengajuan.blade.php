@extends('welcome')

@section('title', 'Pengajuan')

@section('content')
    
        {!! Form::open(['url'   =>  '', 'class' =>  'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('proposal','Proposal:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                {!! Form::text('proposal','',['class'   => 'form-controll input-sm','placeholder' => 'isi proposal']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('event','Event:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                {!! Form::text('event','',['class'   => 'form-controll input-sm','placeholder' => 'isi event']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('kategori','Kategori:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                {!! Form::select('kategori', ['M' => 'Music', 'T' => 'Teknologi', 'L' => 'Lain-lain' ], null, ['class' => 'form-control input-sm', 'placeholder' => 'pilih kategori']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('deskripsi','Deskripsi:',['class' => 'col-sm-2 controll-label' ] ) !!}
                <div class="col-sm-2">
                {!! Form::textArea('deskripsi','',['class' => 'form-controll input-sm','rows' => '3','placeholder' => 'isi deskripsi' ] ) !!}
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::submit('Ajukan!',['class' => 'btn btn-primary btn-block' ]) !!}
                {!! Form::reset('Reset',['class' => 'btn btn-default btn-block' ]) !!}
            </div>

        {!! Form::close() !!}

@stop