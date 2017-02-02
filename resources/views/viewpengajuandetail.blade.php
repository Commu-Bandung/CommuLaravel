@extends('perusahaan')

@section('title', '')

@section('content')
@include('errors/success')
@include('errors/validation')



    @if (count($pengajuans) > 0)
<table class="table table-hover" id="ajuan" >
        <tr class="info">
            <td>no</td>
            <td>Proposal</td>
            <td>event</td>         
            <td>kampus</td>      
            <td>email</td>
            <td>alamat</td>    
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
                <td>{{ $pengajuan->kampus }}</td>
                <td>{{ $pengajuan->email }} </td>
                <td>{{ $pengajuan->alamatKampus }} </td>
                <td>
                    @php  $id = $pengajuan->id;          @endphp 
                    <form method="GET" action="{{url('reviewproposal/'.$id)}}">
                                    {{ csrf_field() }} 
                            
                                <input type="hidden" name="id_pengajuan" value="@php $id @endphp" >
                            <div class="radio-inline">
                                <input type="radio" name="status" id="option1" value="terima">terima
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="status" id="option2" value="tolak">tolak
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


    @else
            <h3>Tidak ada pengajuan</h3>
    @endif        
    


@stop