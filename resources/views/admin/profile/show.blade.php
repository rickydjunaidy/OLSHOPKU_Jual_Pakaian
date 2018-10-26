@extends('admin.layouts.master')

@section('title')
<title>Web Course | Show Profile</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Show Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Profile</li>
        <li class="active">Show Profile</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$data->nama_profile}}</h3>
                        <h3 class="profile-username text-center">
                            <img src="{{ asset('/storage/profile/'.$data->lokasi_gambar)}}" width="100" height="100">
                        </h3>
                    </div>
                    <!-- /.box-body -->
                </div>
        </div>
        
        <div class="col-md-6">
            
            <h1>Daftar Order Terkait</h1>
            <table class="table table-striped ">
                <tr>
                    <th>id</th>
                    <th>nama_kurir</th>
                    <th>status_pembayaran</th>
                    <th>status_pengiriman</th>
                    <th>bukti_pembayaran</th>
                    <th>total_harga</th>
                </tr>
            </table>
        </div>
        
    </div>
</section>

@endsection