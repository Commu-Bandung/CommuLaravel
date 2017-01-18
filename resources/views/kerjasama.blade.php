@extends('welcome')

@section('title','Kerjasama')

@section('content')
 <table class="table table-hover">
  @if (count($kerjasamas) > 0)
    <tr class="info">
        <td>no</td>
        <td>perusahaan</td>
        <td>alamat</td>
        <td>email</td>
        <td>produk</td>    
        <td>jumlah</td>                             
        <td>event</td>                
    </tr>
    @php
      $no = 1;
    @endphp
          @foreach($kerjasamas as $kerjasamas)
            <tr class="active">
                <td>{{ $no }}</td>
                <td>{{ $kerjasamas->nama }}</td>
                <td>{{ $kerjasamas->alamat }}</td>
                <td>{{ $kerjasamas->email }}</td>
                <td>{{ $kerjasamas->produk }}</td>
                <td>{{ $kerjasamas->jumlah }}</td>
                <td>{{ $kerjasamas->event }}</td>
            </tr>
         @php
         $no ++;
         @endphp
         @endforeach

    @else
      <tr>
        <td colspan="3">Tidak ada data Kerjasama</td>
      </tr>
    @endif 
    </tr>
 </table>
 @endsection

 
