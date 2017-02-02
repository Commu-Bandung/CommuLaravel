@extends('admin')

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
                <td>
                    @php  $id = $pengajuan->id          @endphp
                    <form method="POST" action="{{url('validasi/'.$id)}}">
                                    {{ csrf_field() }} 

                            <div class="radio-inline">
                                <input type="radio" name="status_valid" id="option1" value="terima">terima
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="status_valid" id="option2" value="tolak">tolak
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary btn-block">
                                submit
                            </button>
                    </form>
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