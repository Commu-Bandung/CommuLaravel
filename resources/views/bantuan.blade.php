@extends('welcome')

@section('title','Bantuan')

@section('content')

    <table class="table table-hover">
        <tr class="info">
            <td>no</td>
            <td>perusahaan</td>
            <td>alamat</td>
            <td>email</td>
            <td>jumlah dana</td>       
            <td>kategori</td>            
            <td>event</td>       
        </tr>
         <tr class="active">
            {{-- $no = $bantuans->count();
            @for ($i = 0; $i < $no; $i++)
                <td>{{ $no }}</td>
                <td>{{ $bantuans->nama }}</td>
                <td>{{ $bantuans->alamat }}</td>
                <td>{{ $bantuans->email }}</td>
                <td>{{ $bantuans->jumlah_dana }}</td>
                <td>{{ $bantuans->proposal }}</td>
                <td>{{ $bantuans->kategori }}</td>
                <td>{{ $bantuans->event }}</td>
            @endfor --}}

                <td>1 </td>
                <td>astra </td>
                <td>jalan bandung 37</td>                 
                <td>astra@mail.com </td>
                <td>1.000.000</td>
                <td>teknologi </td>
                <td>seminar IOT </td>
        </tr>
        <tr class="active">
            <td>1</td>
            <td>honde</td>
            <td>jalan rusak no 45</td>
            <td>hondi@mail.com</td>
            <td>2.000.000</td>
            <td>pajak</td>
            <td>seminar perpajakan</td>
        </tr>
    </table>

@stop