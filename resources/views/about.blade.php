@extends('welcome')

@section('title','About')

@section('content')

@include('errors/success')

<div class="container">
    <img src="{!! asset('gambar/about.png') !!}">
</div>




@stop

