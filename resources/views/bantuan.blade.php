@extends('welcome')

@section('title','Bantuan')

@section('content')
<link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css" />
<style type="text/css">
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1); -ms-transform: scale(1,1); -moz-transform: scale(1,1); -webkit-transform: scale(1,1); transform: scale(1,1); -o-transition: all 0.2s ease-in-out; -ms-transition: all 0.2s ease-in-out; -moz-transition: all 0.2s ease-in-out; -webkit-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; z-index: 999; -o-transform: scale(1.03,1.03); -ms-transform: scale(1.03,1.03); -moz-transform: scale(1.03,1.03); -webkit-transform: scale(1.03,1.03); transform: scale(1.03,1.03);
    }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
</script>

    <table class="table table-hover">
        @if (count($bantuans) > 0)
        <tr class="info">
            <td>no</td>
            <td>perusahaan</td>
            <td>alamat</td>
            <td>email</td>
            <td>jumlah dana</td>
            <td>bukti</td>       
            <td>kategori</td>            
            <td>event</td>       
        </tr>
            @php
                $no = 1;
            @endphp
            @foreach($bantuans as $bantuans)
            <tr class="active">
                <td>{{ $no }}</td>
                <td>{{ $bantuans->nama }} </td>
                <td>{{ $bantuans->alamat }} </td>
                <td>{{ $bantuans->email }} </td>
                <td>{{ $bantuans->jumlah_dana }} </td>
                <td><img  class="fancybox" width="80px" height="80px" src="{{ asset('bukti/'.$bantuans->bukti.'') }}"  data-big="{{ asset('bukti/'.$bantuans->bukti.'') }}"></td>
                <td>{{ $bantuans->kategori }} </td>
                <td>{{ $bantuans->event }} </td>                
            </tr>
                @php
                    $no ++;
                @endphp
            @endforeach
        @else
        <tr>
            <td colspan="3">Tidak ada data bantuan</td>
        </tr>
        @endif  
    </table>

@stop