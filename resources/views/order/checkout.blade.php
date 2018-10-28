@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | DETAIL ORDER </title>
@endsection

@section('page-title')
    HISTORI PEMESANAN - ORDER ID #{{session('orderterbaru')->id}}
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
                <table class="table table-striped ">
                    <tr>
                        <th>id</th>
                        <th>Nama Produk</th>
                        <th>jumlah_beli</th>
                        <th>harga_produk</th>
                        <th>total_harga_produk</th>
                    </tr>
                    @foreach($order->orderproduk as $d)
                    <tr>
                        <td>{{$d->pivot->id}}</td> 
                        <td>{{$d->nama_produk}}</td> 
                        <td>{{$d->pivot->jumlah_beli}}</td> 
                        <td>{{$d->pivot->harga_produk}}</td> 
                        <td>{{$d->pivot->total_harga_produk}}</td> 
                    </tr>
                    @endforeach
                </table>
            </ul>

            <ul class="order-details-form mb-4">
            <li><span>Subtotal</span> <span>{{$order->total_harga}}</span></li>
            </ul>

            <ul class="order-details-form mb-4">
                <li><span>alamat</span><input type="text" value="{{$order->profile->alamat}}">
                <li>
                    Pilih Kurir
                    <select class="form-control" name="kurir">
                        @foreach($kurir as $kurir)
                            <option name="{{$kurir->id}}">{{$kurir->nama_kurir}}</option>
                        @endforeach
                    </select>
                </li>
                <li><span>Total</span> <span>{{$order->total_harga}}</span></li>
            </ul>
                <!--setelah ditekan akan user akan dilimitasi (tidak dapat add / hapus barang)-->
            @if($order->status_pembayaran != "LUNAS" && $order->status_pembayaran != "ADMIN CHECK" )
                <div class="card">
                    <p>- Cek kembali barang yang ingin dipesan, pembayaran dapat dilakukan setelah konfirmasi pembayaran</p>
                    <p>- Pembayaran dapat dilakukan setelah konfirmasi pembayaran</p>
                </div>

                @if($order->total_harga == 0)
                    <a href="/produk" class="btn essence-btn">BELANJA SEKARANG</a> 
                @else
                    <a href="/order/pembayaran/{{$order->id}}" class="btn essence-btn">KONFIRMASI PEMBAYARAN</a> 
                @endif
            @endif
        </div>

@endsection