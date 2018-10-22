@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | ORDER </title>
@endsection

@section('title')
   <title> OLSHOP | ORDER </title>
@endsection

@section('page-title')
    HISTORI PEMESANAN NAMA_USER
@endsection
    
@section('content')
<div class="cart-page-heading mb-30">
        <h5>LIST DATA ORDER</h5>
</div>
    <!--KELUARKAN SEMUA DATA ORDER DISINI-->

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
            <th>id</th>
            <th>total_harga</th>
            <th>status_pembayaran</th>
            <th>status_pengiriman</th>
            <th>bukti_pembayaran</th>
            <th>kurir</th>
            <th>alamat</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><a href="/detail_order/1">380.000</a></td>
                <td>BELUM LUNAS</td>
                <td>BELUM DIANTAR</td>
                <td>BELUM UPLOAD</td>
                <td>PORTER INDONESIA</td>
                <td>JL. SUKABUMI NO 30</td>
            </tr>
        </table>

@endsection