@extends('admin.layouts.master')

@section('title')
<title>Web Course | Show Kurir</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Show Kurir</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Kurir</li>
        <li class="active">Show Kurir</li>
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
                        <h3 class="profile-username text-center">{{$data->no_telepon}}</h3>
                        
                    </div>
                    <!-- /.box-body -->
                </div>
        </div>
        
        <div class="col-md-6">
            
            <h1>Daftar Order Terkait</h1>
            <table class="table table-striped ">
                <tr>
                    <th>id</th>
                    <th>id_order</th>
                    <th>nama_pemesan</th>
                    <th>status_pembayaran</th>
                    <th>status_pengiriman</th>
                    <th>total_harga</th>
                </tr>
                    @foreach($data->order as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->nama_produk}}</td>
                        <td>{{$d->profile->nama_profile}}</td>
                        <td>{{$d->status_pembayaran}}</td>
                        <td>{{$d->status_pengiriman}}</td>
                        <td>{{$d->total_harga}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
        
    </div>
</section>

@endsection