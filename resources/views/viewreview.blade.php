@extends('welcome')

@section('title','View Review Proposal')

@section('content')

    <table class="table table-hover">
        <tr class="info">
            <td>no</td>
            <td>Proposal</td>
            <td>event</td>         
            <td>kategori</td>          
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
                <td>{{ $pengajuans->status_valid }}</td>
                <td>{{ $pengajuans->status_rev }}</td>
            @endfor --}}
                <td>1</td>
                <td><u> proposal.doc</u></td>
                <td> workshop IOT </td>
                <td> teknologi </td>
                <td><button type="button" class="btn btn-danger">ditolak</button></td>
                <td><button type="button" class="btn btn-default">none</button> </td>
        </tr>
        <tr class="active">
                <td>2</td>
                <td><u> proposal_acara.doc</u></td>
                <td> seminar pajak </td>
                <td> perpajakan </td>
                <td><button type="button" class="btn btn-primary">diterima</button></td>
                <td><button type="button" class="btn btn-danger">ditolak</button> </td>
        </tr>
        <tr class="active">
                <td>3</td>
                <td><u> proposal_event.doc</u></td>
                <td> seminar kewirausahaan </td>
                <td> usaha </td>
                <td><button type="button" class="btn btn-primary">diterima</button></td>
                <td><button type="button" class="btn btn-primary">diterima</button> </td>
        </tr>
    </table>

@stop