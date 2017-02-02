@extends('admin')

@section('title', '')

@section('content')
@include('errors/success')


    <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Profile Saya</h3>
            </div>
            <div class="panel-body">
              <div class="row">                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                     @foreach($profiles as $profiles)
                      <tr>
                        <td>Nama:</td>
                        <td>{{ $profiles->nama }}</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{ $profiles->email }}">{{ $profiles->email }}</a></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="{{ url('/editprofileadmin') }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        </span>
                </div>
            
          </div>



@stop