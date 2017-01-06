@extends('welcome')

@section('title', 'Pengajuan')

@section('content')
@include('errors/success')

    
        {!! Form::open(['url'   =>  '', 'class' =>  'form-horizontal']) !!}
            <div class="form-group">
                {!! Form::label('proposal','Proposal:',['class' => 'col-sm-2 controll-label']) !!}
                <div class="col-sm-2">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-file-word-o">
                            </i>
                        </div>
                        {!! Form::text('proposal','',['class' => 'form-controll input-sm','placeholder' => 'masukan link proposal','required autofocus' =>'required autofocus']) !!}
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
                        {!! Form::select('kategori', ['teknologi' => 'Teknologi','manajemen' => 'Manajemen','language and culture' => 'language and culture',
                                                        'music' => 'Music','fashion & beuty' => 'fashion & beuty', 'lain lain' => 'Lain-lain' ], null,
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