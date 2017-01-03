@extends('welcome')

@section('title','View Review Proposal')

@section('content')

    <table class="table table-hover">
        <tr class="info">
            <td>no</td>
            <td>Proposal</td>
            <td>event</td>         
            <td>kategori</td>            
            <td>deskripsi</td>            
            <td>status validasi</td>
            <td>status Review</td>
        </tr>
        <tr class="active">
            {{-- $no = $pengajuans->count();
            @for ($i = 0; $i < $no; $i++)
                <td>{{ $no }}</td>
                <td>{{ $pengajuans->proposal }}</td>
                <td>{{ $pengajuans->event }}</td>
                <td>{{ $pengajuans->kategori }}</td>
                <td>{{ $pengajuans->deskripsi }}</td>
                <td>{{ $pengajuans->status_valid }}</td>
                <td>{{ $pengajuans->status_rev }}</td>
            @endfor --}}
                <td>no</td>
                <td> proposal </td>
                <td> event </td>
                <td> kategori </td>
                <td> deskripsi </td>
                <td> status validasi</td>
                <td> status review</td>
        </tr>
    </table>

@stop