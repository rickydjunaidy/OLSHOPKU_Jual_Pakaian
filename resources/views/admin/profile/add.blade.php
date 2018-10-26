@extends('admin.layouts.master')

@section('title')
<title>Web Course | Add Profile</title>
@endsection

@section('content-header')
<section class="content-header">
    <h1>
        Dashboard
        <small>Add Profile</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a>Dashboard</li>
        <li>Profile</li>
        <li class="active">Add Profile</li>
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
                    <h3 class="box-title">Add Profile</h3>
                </div>
                {{-- box header --}}

                {{-- form --}}
                <form role="form" action="/admin/profile/store" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <div class="form-group">
                            {{-- <label>nama_user</label>
                            <select class="form-control" name="user_id">
                                @foreach ($user as $nu)
                                    <option value="{{$nu->id}}">{{$nu->name}}</option>
                                @endforeach
                            </select> --}}

                            

                            <label>nama_hak_akses</label>
                            <select class="form-control" name="hak_akses_id">
                                @foreach ($hak_akses as $ha)
                                    <option value="{{$ha->id}}">{{$ha->nama_hak_akses}}</option>
                                @endforeach
                            </select>
                            <label>email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="nama_profile" required>
                            <label>password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="nama_profile" required>
                            <label>nama_profile</label>
                            <input type="text" class="form-control" name="nama_profile" value="{{ old('nama_profile') }}"
                                placeholder="nama_profile" required>
                            <label>tanggal_lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                placeholder="tanggal_lahir" required>
                            <label>alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}"
                                placeholder="alamat" required>
                            <label>lokasi_gambar</label>
                            <input type="file" class="form-control" name="gambar" value="{{ old('gambar') }}"
                                placeholder="gambar" required>
                        </div>
                    </div>
                {{-- form --}}

                    <div class="box-footer">
                        <a href="admin/profile" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>

                </form>
                {{-- form --}}
            </div>

        </div>
    </div>
</section>

@endsection
