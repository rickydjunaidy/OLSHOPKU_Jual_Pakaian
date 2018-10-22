@extends('layouts/mastersingleproduk')

@section('title')
<title> OLSHOPKU | DETAIL PRODUK </title>
@endsection

@section('content')
<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="/img/product-img/product-big-1.jpg" alt="">
                <img src="/img/product-img/product-big-2.jpg" alt="">
                <img src="/img/product-img/product-big-3.jpg" alt="">
            </div>
        </div>
        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>mango</span>
                <h2>One Shoulder Glitter Midi Dress Black</h2>
            <p class="product-price"><span class="old-price">350.000</span> 170.000</p>
            <p class="product-desc">Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <select name="select" id="jumlah" class="mr-5">
                            <option value="value">Jumlah: 1</option>
                            <option value="value">Jumlah: 2</option>
                            <option value="value">Jumlah: 3</option>
                            <option value="value">Jumlah: 4</option>
                            <option value="value">Jumlah: 4</option>
                        </select>
                </div>
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart <button name="back" class="btn essence-btn"><a href="/produk" style="color:white">Back</a></button> -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Add to cart</button>
                </div>
            </form>
        </div>
    </section>

@endsection