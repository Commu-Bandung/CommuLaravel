@extends('perusahaan')

@section('title', 'respon pengajuan')

@section('content')
@include('errors/success')
@include('errors/validation')


    @if (count($pengajuans) > 0)
<table class="table table-hover" id="ajuan" >
        <tr class="info">
            <td>komunitas</td>
            <td>event</td>         
            <td>kampus</td>      
            <td>email</td>
            <td>alamat</td>    
        </tr>
            @foreach ($pengajuans as $pengajuan)
             <tr class="">
                <td>{{ $pengajuan->komunitas }}</a></td>
                <td>{{ $pengajuan->event }}</td>
                <td>{{ $pengajuan->kampus }}</td>
                <td>{{ $pengajuan->email }} </td>
                <td>{{ $pengajuan->alamatKampus }} </td>
                @php
                   $id = $pengajuan->id;
                @endphp                
                
             </tr>
            @endforeach
    </table>
    <br>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Pilih Respon</h3>
                    <span class="pull-right">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class="active"><a href="#tab1" data-toggle="tab">kerjasama</a></li>
                            <li><a href="#tab2" data-toggle="tab">bantuan</a></li>
                        </ul>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form class="form form-signup" role="form" method="POST" action="{{ url('aksi/kerjasama/'.$id) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"></span>
                                            </span>
                                            <input type="Text" name="produk" class="form-control" placeholder="isi nama produk"  required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"></span>
                                            </span>
                                            <input type="Text" name="jumlah" class="form-control" placeholder="isi jumlah produk" required>
                                        </div>
                                    </div>
                                    
                            
                                
                                    <button type="submit" class="btn btn-sm btn-primary btn-block">
                                        Save
                                    </button>    
                            </form>                        
                        </div>
                        <div class="tab-pane" id="tab2">
                            <form class="form form-signup" role="form" method="POST" enctype="multipart/form-data" action="{{ url('aksi/sponsor/'.$id) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"></span>
                                            </span>
                                            <input type="Text" name="jumlah_dana" class="form-control" placeholder="isi jumlah dana"  required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"></span>
                                            </span>
                                            <input type="file" name="bukti" id="fileToUpload" required>                                        </div>
                                    </div>
                                    
                            
                                
                                    <button type="submit" class="btn btn-sm btn-primary btn-block">
                                        Save
                                    </button>    
                            </form> 
                        
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<style type="text/css">
    /*Panel tabs*/
.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #ffffff;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #ffffff;
    background-color: transparent;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #fff;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}
</style>


    @else
            <h3>Tidak ada pengajuan</h3>
    @endif    






@stop