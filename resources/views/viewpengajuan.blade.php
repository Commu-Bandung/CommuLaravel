@extends('perusahaan')

@section('title', '')

@section('content')
@include('errors/success')
@include('errors/validation')



<table class="table table-hover" id="ajuan" >
    @if (count($pengajuans) > 0)
        <tr class="info">
            <td>no</td>
            <td>Proposal</td>
            <td>event</td>         
            <td>kategori</td>          
            <td>validasi</td>
        </tr>
            @php
                $no = 1;
            @endphp
            @foreach ($pengajuans as $pengajuan)
             <tr class="">
                <td>{{ $no }}</td>
                @php $file = $pengajuan->proposal; @endphp
                <td><a href="{{ url('/download/'. $file)}}"> {{ $pengajuan->proposal }}.pdf</a></td>
                <td>{{ $pengajuan->event }}</td>
                <td>{{ $pengajuan->kategori }}</td>
                <td>{{ link_to('pengajuan/'.$pengajuan->id, 'validasi', ['class' => 'btn btn-success btn-sm'])}}
                    
                </td>
                
                
             </tr>
             @php
                $no ++;
             @endphp
            @endforeach
    </table>

    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script>
            $ (function () {
                $ ('#ajuan').DataTable({"pageLength": 3});
            });
        </script>
    @endsection


    @else
            <h3>Tidak ada pengajuan</h3>
    @endif        
    


@stop