@extends('admin.layouts.master')

@section('title')
<title>Web Course | Show Order</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Show Order</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Order</li>
        <li class="active">Show Order</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$data->profile->nama_profile}}</h3>
                        <h3 class="profile-username text-center">{{$data->kurir->nama_kurir}}</h3>
                        <h3 class="profile-username text-center">
                            <img src="{{ asset('/storage/order/'.$data->lokasi_gambar)}}" width="100" height="100">
                        </h3>
                        <h3 class="profile-username text-center">{{$data->status_pembayaran}}</h3>
                        <h3 class="profile-username text-center">{{$data->status_pengiriman}}</h3>
                        <h3 class="profile-username text-center">{{$data->total_harga}}</h3>
                    </div>
                    <!-- /.box-body -->
                </div>
        </div>
    </div>

    <div class="col-md-6">     
    <h1>List Order Produk - OrderId#{{$data->id}}</h1>
    <a href="/admin/detailorder/add/{{$data->id}}">
        <button class="btn btn-info pull-right">+Add new Data</button>
    </a>
        <table class="table table-striped ">
            <tr>
                <th>id</th>
                <th>Nama Produk</th>
                <th>jumlah_beli</th>
                <th>harga_produk</th>
                <th>total_harga_produk</th>
                <th>action</th>
            </tr>
            @foreach($data->orderproduk as $d)
            <tr>
                <td>{{$d->pivot->id}}</td> 
                <td>{{$d->nama_produk}}</td> 
                <td>{{$d->pivot->jumlah_beli}}</td> 
                <td>{{$d->pivot->harga_produk}}</td> 
                <td>{{$d->pivot->total_harga_produk}}</td> 
                <td>
                <form action="/admin/detailorder/destroy/{{$data->id}}/{{ $d->pivot->id }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</section>

@endsection