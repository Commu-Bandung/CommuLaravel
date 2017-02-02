@extends('welcome')

@section('title', 'Pengajuan')

@section('content')
@include('errors/success')
@include('errors/validation')

    
        {!! Form::open(['url'  => 'ajukan', 'method' => 'POST', 'files' => true,'class' =>  'form-horizontal']) !!}
            {{ csrf_field() }}
            <div class="form-group">
                {!! Form::label('proposal','Proposal:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-file-word-o">
                            </i>
                        </div>
                        {!! Form::file('proposal','',['class' => 'form-controll input-sm','required autofocus' =>'required autofocus']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('event','Event:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar">
                            </i>
                        </div>
                            {!! Form::text('event','',['class'   => 'form-controll input-sm','placeholder' => 'isi event','required autofocus' =>'required autofocus']) !!}
                        </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('kategori','Kategori:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-gear">
                            </i>
                        </div>
                        {!! Form::select('kategori', ['teknologi' => 'teknologi','menejemen' => 'menejemen','language and culture' => 'language and culture',
                                                        'music' => 'music','fashion & beuty' => 'fashion & beuty', 'lain lain' => 'lain lain' ], null,
                                                     ['class' => 'form-control input-sm', 'placeholder' => 'pilih kategori','required autofocus' =>'required autofocus']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('deskripsi','Deskripsi:',['class' => 'col-sm-2 controll-label' ] ) !!}
                <div class="col-sm-2">
                {!! Form::textArea('deskripsi','',['class' => 'form-controll input-sm','rows' => '3','placeholder' => 'isi deskripsi','required autofocus' =>'required autofocus' ] ) !!}
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::submit('Ajukan!',['class' => 'btn btn-primary btn-block' ]) !!}
                {!! Form::reset('Reset',['class' => 'btn btn-default btn-block' ]) !!}
            </div>

        {!! Form::close() !!}

@stop