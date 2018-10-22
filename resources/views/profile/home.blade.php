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
<form action="#" method="post">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="first_name">Nama Profile<span>*</span></label>
                <input type="text" class="form-control" id="first_name" value="" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="last_name">Alamat<span>*</span></label>
                <input type="text" class="form-control" id="last_name" value="" required>
            </div>
            <div class="col-12 mb-3">
                <label for="postcode">KodePos<span>*</span></label>
                <input type="text" class="form-control" id="postcode" value="">
            </div>
            <div class="col-12 mb-3">
                <label for="phone_number">No. Telepon <span>*</span></label>
                <input type="number" class="form-control" id="phone_number" min="0" value="">
            </div>
            <div class="col-12 mb-4">
                <label for="email_address">Alamat Email <span>*</span></label>
                <input type="email" class="form-control" id="email_address" value="">
            </div>
            <div class="col-12 mb-4">
                <label for="photo_profile">Upload Foto Profile<span>*</span></label>
                <input type="file" class="form-control" id="photo_profile" value="">
            </div>
        </div>
        <button type="submit" name="addtocart" class="btn essence-btn">SIMPAN PROFILE</button>
    </form>
@endsection