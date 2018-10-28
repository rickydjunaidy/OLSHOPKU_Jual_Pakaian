@extends('layouts/mastershop')

@section('title')
   <title> OLSHOPKU | PRODUK </title>
@endsection

@section('content')
<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Catagories</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <!-- Single Item -->
                                <li data-toggle="collapse" data-target="#clothing">
                                    <a href="#">clothing</a>
                                    <ul class="sub-menu collapse show" id="clothing">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Bodysuits</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Hoodies &amp; Sweats</a></li>
                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Pants &amp; Leggings</a></li>
                                        <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Sweaters &amp; Knits</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    @foreach($data as $produk)
                        <!-- Single Product -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{ asset('/storage/produk/'.$produk->lokasi_gambar)}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{ asset('/storage/produk/'.$produk->lokasi_gambar)}}" alt="">
                                </div>

                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>{{$produk->kategori->nama_kategori}}</span>
                                    <a href="single-product-details.html">
                                        <h6>{{$produk->nama_produk}}</h6>
                                    </a>
                                    <p class="product-price">Rp. {{$produk->harga}} ,00</p>
                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- cek produk -->
                                        <div class="add-to-cart-btn">
                                        <a href="produk/show/{{$produk->id}}" class="btn essence-btn">cek produk</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
                <!-- Pagination -->
                <nav aria-label="navigation">
                    <ul class="pagination mt-50 mb-70">
                        {{$data->links()}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->
@endsection

