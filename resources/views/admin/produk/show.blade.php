@extends('admin.layouts.master')

@section('title')
<title>Web Course | Show Produk</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Show Produk</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Produk</li>
        <li class="active">Show Produk</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$data->kategori->nama_kategori}}</h3>
                        <h3 class="profile-username text-center">
                            <img src="{{ asset('/storage/produk/'.$data->lokasi_gambar)}}" width="100" height="100">
                        </h3>
                        <h3 class="profile-username text-center">{{$data->deskripsi_produk}}</h3>
                        <h3 class="profile-username text-center">{{$data->harga}}</h3>
                        <h3 class="profile-username text-center">{{$data->stok_barang}}</h3>
                    </div>
                    <!-- /.box-body -->
                </div>
        </div>
    </div>
</section>

@endsection