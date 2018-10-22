@extends('admin.layouts.master')

@section('title')
<title>Web Course | kategori</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Kategori</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li class="active">Kategori</li>
    </ol>
</section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tabel Kategori</h3>
                    <div class="box-tools">
                        <a href="/kategori/add">
                            <button class="btn btn-info pull-right">+Add new Data</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>nama_kategori</th>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
