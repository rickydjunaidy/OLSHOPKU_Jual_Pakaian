@extends('admin.layouts.master')

@section('title')
<title>Web Course | Show Hak Akses</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Show Hak Akses</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Hak Akses</li>
        <li class="active">Show Hak Akses</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$data->nama_kurir}}</h3>
                        
                    </div>
                    <!-- /.box-body -->
                </div>
        </div>
        
        <div class="col-md-6">
            
            <h1>Daftar Profile Terkait</h1>
            <table class="table table-striped ">
                <tr>
                    <th>id</th>
                    <th>nama_profile</th>
                    <th>tanggal_lahir</th>
                    <th>alamat</th>
                    <th>lokasi_gambar</th>
                </tr>
                    @foreach($data->profile as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->nama_profile}}</td>
                        <td>{{$d->tanggal_lahir}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->lokasi_gambar}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
        
    </div>
</section>

@endsection