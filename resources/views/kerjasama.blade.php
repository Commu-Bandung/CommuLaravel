@extends('welcome')

@section('title','Kerjasama')

@section('content')
 <table class="table table-hover">
    <tr class="info">
        <td>no</td>
        <td>nama</td>
        <td>email</td>
        <td>kampus</td>        
        <td>produk</td>    
        <td>jumlah</td>                             
        <td>proposal</td>                
        <td>event</td>                
    </tr>
    <tr class="active">
            {{-- $no = $kerjasamas->count();
            @for ($i = 0; $i < $no; $i++)
                <td>{{ $no }}</td>
                <td>{{ $kerjasamas->nama }}</td>
                <td>{{ $kerjasamas->email }}</td>
                <td>{{ $kerjasamas->kampus }}</td>
                <td>{{ $kerjasamas->produk }}</td>
                <td>{{ $kerjasamas->jumlah }}</td>
                <td>{{ $kerjasamas->proposal }}</td>
                <td>{{ $kerjasamas->event }}</td>
            @endfor --}}

                <td>no </td>
                <td>nama </td>
                <td>email </td>
                <td>kampus </td>
                <td>produk</td>
                <td>jumlah</td>
                <td>proposal </td>
                <td>event 
    </tr>
 </table>
 @endsection

 
