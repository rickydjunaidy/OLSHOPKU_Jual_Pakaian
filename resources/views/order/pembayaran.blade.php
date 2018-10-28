@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | DETAIL ORDER </title>
@endsection

@section('page-title')
    PEMBAYARAN - ORDER ID #{{session('orderterbaru')->id}}
@endsection
    
@section('content')
    <div class="cart-page-heading mb-30">
            <h5>PEMBAYARAN</h5>
    </div>
    <!--KELUARKAN SEMUA DATA ORDER DISINI-->

    <div class="order-details-confirmation">
        <p>TRANSFER KE NO REK BCA</p>
        <h1>7217-123123-132132</h1>
        <h1>RP. {{session('orderterbaru')->total_harga}} ,00</h1>

    <form action="/order/pembayaran/upload" method="post" enctype="multipart/form-data">
        <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
        <div class="col-12 mb-4">
            <label for="photo_profile">Upload Bukti Pembayaran<span>*</span></label>
            <input type="file" class="form-control" name="gambar" id="photo_profile" value="" required>
        </div>
        <button type="submit" class="btn essence-btn">UPLOAD BUKTI PEMBAYARAN</button>
    </form>

        <p>*admin akan melakukan verifikasi setelah bukti pembayaran diupload</p>
        <p>*pastikan gambar terlihat jelas saat upload, agar mempercepat proses pelunasan</p>
        <a href="/order/pembayaran/cancel/cancelpembayaran" class="btn essence-btn">BATALKAN KONFIRMASI PEMBAYARAN</a>
    </div>

@endsection