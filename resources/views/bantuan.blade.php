@extends('welcome')

@section('title','Bantuan')

@section('content')

    <table class="table table-hover">
        @if (count($bantuans) > 0)
        <tr class="info">
            <td>no</td>
            <td>perusahaan</td>
            <td>alamat</td>
            <td>email</td>
            <td>jumlah dana</td>
            <td>bukti</td>       
            <td>kategori</td>            
            <td>event</td>       
        </tr>
            @php
                $no = 1;
            @endphp
            @foreach($bantuans as $bantuans)
            <tr class="active">
                <td>{{ $no }}</td>
                <td>{{ $bantuans->nama }} </td>
                <td>{{ $bantuans->alamat }} </td>
                <td>{{ $bantuans->email }} </td>
                <td>{{ $bantuans->jumlah_dana }} </td>
                <td>{{ $bantuans->bukti }} </td>
                <td>{{ $bantuans->kategori }} </td>
                <td>{{ $bantuans->event }} </td>                
            </tr>
                @php
                    $no ++;
                @endphp
            @endforeach
        @else
        <tr>
            <td colspan="3">Tidak ada data bantuan</td>
        </tr>
        @endif  
    </table>

@stop