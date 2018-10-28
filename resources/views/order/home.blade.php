@extends('layouts/masterorder')

@section('title')
   <title> OLSHOP | ORDER </title>
@endsection

@section('page-title')
    HISTORI PEMESANAN {{session('user')->profile->nama_profile}}
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
            <th>nama_kurir</th>
            <th>status_pembayaran</th>
            <th>status_pengiriman</th>
            <th>bukti_pembayaran</th>
            <th>total_harga</th>
            <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $data)
                <tr>
                    <td><a href="/order/checkout/{{$data->id}}">{{$data->id}}</a></td>
                    <td>{{$data->kurir->nama_kurir}}</td>
                    <td>{{$data->status_pembayaran}}</td>
                    <td>{{$data->status_pengiriman}}</td>
                    <td>{{$data->bukti_pembayaran}}</td>
                    <td>{{$data->total_harga}}</td>
                    <th>
                        @if($data->status_pembayaran == 'READY')
                        
                            <a href="/order/pembayaran/{{$data->id}}" class="btn essence-btn">upload data pembayaran</a>
                        
                        @elseif($data->status_pembayaran == 'LUNAS')
                        
                            <a href="/order/checkout/{{$data->id}}" class="btn essence-btn">cek histori</a>
                        
                        @elseif ($data->status_pembayaran == 'BELUM LUNAS')
                        
                            <a href="/order/checkout/{{$data->id}}" class="btn essence-btn">checkout</a>
                        
                        @elseif ($data->status_pembayaran == 'ADMIN CHECK')
                        
                            <a href="/order/checkout/{{$data->id}}" class="btn essence-btn">cek histori</a>

                        @endif
                    </th>
                </tr>
            @endforeach
        </table>

@endsection