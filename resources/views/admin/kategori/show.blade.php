@extends('admin.layouts.master')

@section('title')
<title>Web Course | Show Kategori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Show Kategori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Kategori</li>
        <li class="active">Show Kategori</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3 class="profile-username text-center">{{$data->nama_kategori}}</h3>
                        
                    </div>
                    <!-- /.box-body -->
                </div>
        </div>
        
        <div class="col-md-6">
            
            <h1>Daftar Produk Terkait</h1>
            <table class="table table-striped ">
                <tr>
                    <th>id</th>
                    <th>Nama Produk</th>
                </tr>
                    @foreach($data->produk as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->nama_produk}}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
        
    </div>
</section>

@endsection