@extends('welcome')

@section('title','')

@section('content')

@include('errors/success')
@php
$id_anggota =session()->get('id_anggota');

@endphp
        
<link href="{!! asset('css/home.css') !!}" rel="stylesheet">      
<script src="{!! asset('js/home.js') !!}"></script>

 <div class="row" >
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="{!! asset('gambar/1.png') !!}">
                <div class="carousel-caption">
                    <h3>
                        Aplikasi Pencarian Sponsor dan Partner</h3>
                    <p>
                        Aplikasi ini dikhususkan untuk komunitas ataupun organisasi yang ada disuatu kampus yang berada
                        diwilayah bandung, agar mempermudah pencarian data pada suatu event.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="{!! asset('gambar/2.png') !!}">                
                <div class="carousel-caption">
                    <h3>
                        Pengajuan Proposal</h3>
                    <p>
                        Untuk mendapatkan sponsor pada sebuah event, seorang anggota komunitas harus mengajukan Proposal
                        yang diupload ke dalam aplikasi ini, kemudian proposal akan divalidasi oleh admin. Apabila diterima 
                        oleh admin maka akan dilakukan review oleh perusahaan, nantinya perusahaan akan memilih antara
                        menjadi partner atau sponsor apabila diterima oleh perusahaan.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="{!! asset('gambar/3.png') !!}">            
                <div class="carousel-caption">
                    <h3>
                        Partnership</h3>
                    <p>
                        Perusahaan melakukan partnership dengan komunitas yang telah diterima proposalnya 
                        dan perusahaan memilih untuk melakukan kerjasama dengan komunitas untuk menjual barang
                        dagangannya ketika event ataupun sesuai kesepakatan dengan perusahaan.</p>
                </div>
            </div>
            <!-- End Item -->
            <div class="item">
                <img src="{!! asset('gambar/4.png') !!}">            
                <div class="carousel-caption">
                    <h3>
                        Sponsorship</h3>
                    <p>
                        Perusahaan mensponsori event yang dilakukan oleh komunitas atau organisasi yang telah
                        diterima proposalnya dengan memberi bantuan kepada pihak organisasi.</p>
                </div>
            </div>
            <!-- End Item -->
        </div>

         <!-- End Carousel Inner -->
        <ul class="nav nav-pills nav-justified">
            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">Tentang<small>selayang
            pandang aplikasi ini</small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">Proposal<small>Alur pengajuan proposal
            sampai ke perusahaan</small></a></li>
            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Partnership<small>Kerjasama dengan
            perusahaan</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Sponsorship<small>Perusahaan mensponsori
            event komunitas</small></a></li>
        </ul>
    </div>
    <!-- End Carousel -->
</div>
        </div>
    

@stop