@extends('welcome')

@section('title','Bantuan')

@section('content')

    <table class="table table-hover">
        <tr class="info">
            <td>no</td>
            <td>nama</td>
            <td>email</td>
            <td>kampus</td>
            <td>alamat ampus</td>
            <td>jumlah dana</td>
            <td>proposal</td>            
            <td>kategori</td>            
            <td>event</td>       
        </tr>
         <tr class="active">
            {{-- $no = $bantuans->count();
            @for ($i = 0; $i < $no; $i++)
                <td>{{ $no }}</td>
                <td>{{ $bantuans->nama }}</td>
                <td>{{ $bantuans->email }}</td>
                <td>{{ $bantuans->kampus }}</td>
                <td>{{ $bantuans->alamatKampus }}</td>
                <td>{{ $bantuans->jumlah_dana }}</td>
                <td>{{ $bantuans->proposal }}</td>
                <td>{{ $bantuans->kategori }}</td>
                <td>{{ $bantuans->event }}</td>
            @endfor --}}

                <td>no </td>
                <td>nama </td>
                <td>email </td>
                <td>kampus </td>
                <td>alamat Kampus </td>
                <td>jumlah_dana </td>
                <td>proposal </td>
                <td>kategori </td>
                <td>event </td>
        </tr>
    </table>

@stop