@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | DETAIL ORDER </title>
@endsection

@section('page-title')
    PEMBAYARAN - ORDER ID #id_order
@endsection
    
@section('content')
    <div class="cart-page-heading mb-30">
            <h5>PEMBAYARAN</h5>
    </div>
    <!--KELUARKAN SEMUA DATA ORDER DISINI-->

    <div class="order-details-confirmation">
        <p>TRANSFER KE NO REK BCA</p>
        <h1>7217-123123-132132</h1>
        <h1>RP. 380.000 ,00</h1>
        <a href="#" class="btn essence-btn">UPLOAD PEMBAYARAN</a>
        <p>*admin akan melakukan verifikasi setelah bukti pembayaran diupload</p>
        <a href="/detail_order/1" class="btn essence-btn">BATALKAN KONFIRMASI PEMBAYARAN</a>

            
    </div>

@endsection