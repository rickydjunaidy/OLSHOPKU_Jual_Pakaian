@extends('layouts/mastersingleproduk')

@section('title')
<title> OLSHOPKU | DETAIL PRODUK </title>
@endsection

@section('content')
<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
                <img src="{{ asset('/storage/produk/'.$data->lokasi_gambar)}}" alt="">
        </div>
        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>{{$data->kategori->nama_kategori}}</span>
            <h2>{{$data->nama_produk}}</h2>
            <p class="product-price">Rp. {{$data->harga}} ,00</p>
            <p class="product-desc"> {{$data->deskripsi_produk}}.</p>
            
            <form class="cart-form clearfix" method="post" action="/detailorder/store">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id_produk" value="{{ $data->id }}">
                <input type="hidden" name="harga_produk" value="{{ $data->harga }}">

                <div class="select-box d-flex mt-50 mb-30">
                    <select name="jumlah_beli" id="jumlah" class="mr-5">
                            <option value="1">Jumlah: 1</option>
                            <option value="2">Jumlah: 2</option>
                            <option value="3">Jumlah: 3</option>
                            <option value="4">Jumlah: 4</option>
                            <option value="5">Jumlah: 5</option>
                        </select>
                </div>
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart <button name="back" class="btn essence-btn"><a href="/produk" style="color:white">Back</a></button> -->
                    <button type="submit" name="addtocart" class="btn essence-btn">Add to cart</button>
                </div>
            </form>
        </div>
    </section>

@endsection