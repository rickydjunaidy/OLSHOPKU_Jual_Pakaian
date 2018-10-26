@extends('admin.layouts.master')

@section('title')
<title>Web Course | Kurir</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Kurir</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li class="active">Kurir</li>
    </ol>
</section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tabel Kurir</h3>
                    <div class="box-tools">
                        <a href="/admin/kurir/add">
                            <button class="btn btn-info pull-right">+Add new Data</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>nama_kurir</th>
                            <th>no_telepon</th>
                        </tr>
                        @foreach($data as $d)
                            <tr>   
                                    <td>{{$d->id}}</td>
                                    <td><a href="/admin/kurir/show/{{$d->id}}">{{$d->nama_kurir}}</a></td>  
                                    <td>{{$d->no_telepon}}</a></td>   
                                    <td>
                                        <form action="/admin/kurir/destroy/{{ $d->id }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-primary" href="/admin/kurir/edit/{{$d->id}}">
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
