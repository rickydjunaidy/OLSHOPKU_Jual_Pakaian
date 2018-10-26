@extends('admin.layouts.master')

@section('title')
<title>Web Course | Produk</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Produk</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li class="active">Produk</li>
    </ol>
</section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tabel Produk</h3>
                    <div class="box-tools">
                        <a href="/admin/produk/add">
                            <button class="btn btn-info pull-right">+Add new Data</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>nama_produk</th>
                            <th>nama_kategori</th>
                            <th>deskripsi_produk</th>
                            <th>harga</th>
                            <th>stok_barang</th>
                            <th>lokasi_gambar</th>
                            <th>action</th>
                        </tr>
                        @foreach($data as $d)
                            <tr>
                                    <td>{{$d->id}}</td>
                                    <td><a href="/admin/produk/show/{{$d->id}}">{{$d->nama_produk}}</a></td> 
                                    <td>{{$d->kategori->nama_kategori}}</td>
                                    <td>{{$d->deskripsi_produk}}</td>
                                    <td>{{$d->harga}}</td>
                                    <td>{{$d->stok_barang}}</td> 
                                    <td>{{$d->lokasi_gambar}}</td> 
                                    <td>
                                        <form action="/admin/produk/destroy/{{ $d->id }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-primary" href="/admin/produk/edit/{{$d->id}}">
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
