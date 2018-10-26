@extends('admin.layouts.master')

@section('title')
<title>Web Course | Hak Akses</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Hak Akses</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li class="active">Hak Akses</li>
    </ol>
</section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tabel Hak Akses</h3>
                    <div class="box-tools">
                        <a href="/admin/hak_akses/add">
                            <button class="btn btn-info pull-right">+Add new Data</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>nama_hak_akses</th>
                        </tr>
                        @foreach($data as $d)
                            <tr>   
                                    <td>{{$d->id}}</td>
                                    <td><a href="/admin/hak_akses/show/{{$d->id}}">{{$d->nama_hak_akses}}</a></td>                                      <td>
                                        <form action="/admin/hak_akses/destroy/{{ $d->id }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-primary" href="/admin/hak_akses/edit/{{$d->id}}">
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
