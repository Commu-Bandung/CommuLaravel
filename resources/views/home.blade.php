@extends('welcome')

@section('title','Home')

@section('content')

@include('errors/success')
@php
$id_anggota =session()->get('id_anggota');

@endphp

{{ $id_anggota or 'Default' }}


    

@stop