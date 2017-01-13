@extends('welcome')

@section('title','Kerjasama')

@section('content')
 <table class="table table-hover">
    <tr class="info">
        <td>no</td>
        <td>perusahaan</td>
        <td>alamat</td>
        <td>email</td>
        <td>produk</td>    
        <td>jumlah</td>                             
        <td>event</td>                
    </tr>
    <tr class="active">
            {{-- $no = $kerjasamas->count();
            @for ($i = 0; $i < $no; $i++)
                <td>{{ $no }}</td>
                <td>{{ $kerjasamas->nama }}</td>
                <td>{{ $kerjasamas->alamat }}</td>
                <td>{{ $kerjasamas->email }}</td>
                <td>{{ $kerjasamas->produk }}</td>
                <td>{{ $kerjasamas->jumlah }}</td>
                <td>{{ $kerjasamas->event }}</td>
            @endfor --}}

                <td>1 </td>
                <td>astra </td>
                <td>jalan kopo no 65 </td>
                <td>astra@mail.com </td>
                <td>kecap jahe</td>
                <td>2000</td>
                <td>seminar IOT </td>
    </tr>
    <tr class="active">
                <td>2 </td>
                <td>honde </td>
                <td>jalan india no 65 </td>
                <td>honde@mail.com </td>
                <td>ban motor</td>
                <td>100</td>
                <td>seminar pajak </td>
    </tr>
 </table>
 @endsection

 
