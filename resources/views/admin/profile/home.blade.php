@extends('admin.layouts.master')

@section('title')
<title>Web Course | Profile</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li class="active">Profile</li>
    </ol>
</section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tabel Profile</h3>
                    <div class="box-tools">
                        <a href="/admin/profile/add">
                            <button class="btn btn-info pull-right">+Add new Data</button>
                        </a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th>id</th>
                            <th>email</th>
                            <th>password</th>
                            <th>nama_profile</th>
                            <th>nama_hak_akses</th>
                            <th>tanggal_lahir</th>
                            <th>alamat</th>
                            <th>lokasi_gambar</th>
                            <th>action</th>
                        </tr>
                        @foreach($data as $d)
                            <tr>
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->user->email}}</td>
                                    <td>{{$d->user->password}}</td>
                                    <td><a href="/admin/profile/show/{{$d->id}}">{{$d->nama_profile}}</a></td> 
                                    <td>{{$d->hak_akses->nama_hak_akses}}</td>
                                    <td>{{$d->tanggal_lahir}}</td> 
                                    <td>{{$d->alamat}}</td> 
                                    <td>{{$d->lokasi_gambar}}</td> 
                                    <td>
                                        <form action="/admin/profile/destroy/{{ $d->id }}" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-primary" href="/admin/profile/edit/{{$d->id}}">
                                                Edit
                                            </a>
                                            <button class="btn btn-danger" disable>Delete</button>
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
