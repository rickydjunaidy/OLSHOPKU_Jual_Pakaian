@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | DETAIL ORDER </title>
@endsection

@section('page-title')
    HISTORI PEMESANAN - ORDER ID #id_order
@endsection
    
@section('content')
<div class="cart-page-heading mb-30">
        <h5>LIST DATA ORDER</h5>
</div>
    <!--KELUARKAN SEMUA DATA ORDER DISINI-->

    <div class="order-details-confirmation">

            <div class="cart-page-heading">
                <h5>Your Order</h5>
                <p>The Details</p>
            </div>

            <ul class="order-details-form mb-4">
                <li><span>Product</span> <span>Total</span></li>
            </ul>

            <ul class="order-details-form mb-4">
                    <li><span>Button Through Strap Mini Dress</span> <span>100.000</span></li>
                    <li><span>Pinned Through Strap Long Dress</span> <span>100.000</span></li>
                    <li><span>Lingerie Through Strap Large Dress</span> <span>180.000</span></li>
                </ul>

            <ul class="order-details-form mb-4">
                    <li><span>Subtotal</span> <span>380.000</span></li>
                </ul>

            <ul class="order-details-form mb-4">
                    <li><span>alamat</span><input type="text" value="JL. SUKABUMI NO 30">
                    <li>
                        Pilih Kurir
                        <select class="form-control" name="kurir">
                            <option>PORTER INDONESIA</option>
                            <option>JNE</option>
                            <option>TIKI</option>
                        </select>
                    </li>
                    <li><span>Total</span> <span>380.000</span></li>
                </ul>

                <div class="card">
                    <p>- Cek kembali barang yang ingin dipesan, pembayaran dapat dilakukan setelah konfirmasi pembayaran</p>
                    <p>- Pembayaran dapat dilakukan setelah konfirmasi pembayaran</p>
                </div>
                <!--setelah ditekan akan user akan dilimitasi (tidak dapat add / hapus barang)-->
                <a href="/pembayaran/1" class="btn essence-btn">KONFIRMASI PEMBAYARAN</a> 
            </div>
        </div>

@endsection