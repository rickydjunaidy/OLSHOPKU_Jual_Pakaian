@extends('admin.layouts.master')

@section('title')
<title>Web Course | Edit Profile</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Edit Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Profile</li>
        <li class="active">Edit Profile</li>
    </ol>
</section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            {{-- box header --}}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Data Profile</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/profile/update" method="POST" enctype="multipart/form-data">
                    
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="{{$data->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">

                        </div>
                    </div>

                    <div class="box-body">
                        <div class="form-group">
                                <label>nama_user</label>
                                <select class="form-control" name="user_id">
                                    @foreach ($user as $nu)
                                        <option  value="{{$nu->id}}">{{$nu->name}}</option>
                                    @endforeach
                                </select>
                                <label>nama_hak_akses</label>
                                <select class="form-control" name="hak_akses_id">
                                    @foreach ($hak_akses as $ha)
                                        <option value="{{$ha->id}}">{{$ha->nama_hak_akses}}</option>
                                    @endforeach
                                </select>
                                <label>nama_profile</label>
                                <input type="text" class="form-control" name="nama_profile" value="{{$data->nama_profile}}"
                                    placeholder="nama_profile" required>
                                <label>tanggal_lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->tanggal_lahir}}"
                                    placeholder="tanggal_lahir" required>
                                <label>alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}"
                                    placeholder="alamat" required>
                                <label>lokasi_gambar</label>
                                <input type="file" class="form-control" name="gambar" placeholder="alamat">
                        </div>
                    </div>
                    {{-- form --}}

                    <div class="box-footer">
                        <a href="/admin/profile" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
