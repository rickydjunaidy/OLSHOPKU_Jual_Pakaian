@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | PROFILE </title>
@endsection

@section('page-title')
    PROFILE USER
@endsection
    
@section('content')
<div class="cart-page-heading mb-30">
        <h5>PROFILE USER</h5>
</div>
    <!--KELUARKAN SEMUA DATA DISINI-->
<form action="profile/update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="first_name">Nama Profile<span>*</span></label>
            <input type="text" class="form-control" name="nama_profile" id="first_name" value="{{$data->nama_profile}}" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="last_name">Alamat<span>*</span></label>
                <input type="text" class="form-control" name="alamat" id="last_name" value="{{$data->alamat}}" required>
            </div>
            <div class="col-12 mb-3">
                <label for="postcode">Tanggal Lahir<span>*</span></label>
            <input type="date" class="form-control" name="tanggal_lahir" id="postcode" value="{{$data->tanggal_lahir}}">
            </div>
            <div class="col-12 mb-4">
                <label for="email_address">Alamat Email <span>*</span></label>
                <input type="email" class="form-control" name="user" id="email_address" value="{{$data->user->email}}" readonly>
            </div>
            <div class="col-12 mb-4">
                <label for="photo_profile">Upload Foto Profile<span>*</span></label>
                <input type="file" class="form-control" name="gambar" id="photo_profile" value="">
            </div>
        </div>
        <button type="submit" name="addtocart" class="btn essence-btn">SIMPAN PROFILE</button>
    </form>
@endsection