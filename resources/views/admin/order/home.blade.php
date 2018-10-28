@extends('admin.layouts.master')

@section('title')
<title>Web Course | Order</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Order</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li class="active">Order</li>
    </ol>
</section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tabel Order</h3>
                    <div class="box-tools">
                        <a href="/admin/order/add">
                            <button class="btn btn-info pull-right">+Add new Data</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>nama_profile</th>
                            <th>nama_kurir</th>
                            <th>status_pembayaran</th>
                            <th>status_pengiriman</th>
                            <th>bukti_pembayaran</th>
                            <th>total_harga</th>
                            <th>action</th>
                        </tr>
                        @foreach($data as $d)
                            <tr>
                                    <td><a href="/admin/order/show/{{$d->id}}">{{$d->id}}</a></td>
                                    <td>{{$d->profile->nama_profile}}</td> 
                                    <td>{{$d->kurir->nama_kurir}}</td>
                                    <td>{{$d->status_pembayaran}}</td>
                                    <td>{{$d->status_pengiriman}}</td>
                                    <td>
                                        @if($d->bukti_pembayaran == "awal")
                                        user belum upload bukti pembayaran.  
                                        @else
                                        <input type="button" class="form-control" name="bukti_pembayaran" value="CEK BUKTI PEMBAYARAN"
                                        placeholder="CEK bukti_pembayaran" onclick="location.href='http://localhost:8000/storage/produk/{{$d->bukti_pembayaran}}';" required>
                                        @endif      
                                    </td> 
                                    <td>{{$d->total_harga}}</td> 
                                    <td>
                                        <form action="/admin/order/destroy/{{ $d->id }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-primary" href="/admin/order/edit/{{$d->id}}">
                                                Edit
                                            </a>
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
