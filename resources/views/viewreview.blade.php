@extends('welcome')

@section('title','View Review Proposal')

@section('content')

    <table class="table table-hover">
    @if (count($pengajuans) > 0)
        <tr class="info">
            {{-- <td>no</td> --}}
            <td>Proposal</td>
            <td>event</td>         
            <td>kategori</td>          
            <td>status validasi</td>
            <td>status Review</td>
        </tr>
            @foreach ($pengajuans as $pengajuans)
             <tr class="active">
                <td>{{ $pengajuans->proposal }}</td>
                <td>{{ $pengajuans->event }}</td>
                <td>{{ $pengajuans->kategori }}</td>
                <td>{{ $pengajuans->status_valid }}</td>
                <td>{{ $pengajuans->status_rev }}</td>
             </tr>
            @endforeach
    @else
        <tr>
            <td colspan="3">Tidak ada pengajuan</td>
        </tr>
    @endif        
    </table>

@stop