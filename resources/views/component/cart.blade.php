
<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src="/img/core-img/bag.svg" alt=""><span>
            <?php
                $jumlah_keranjang = 0;
                foreach(session('orderterbaru')->orderproduk as $data)
                {
                    $jumlah_keranjang++;
                }
                echo $jumlah_keranjang;
            ?>
        </span></a>
    </div>

    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
            <!-- Single Cart Item -->
            <?php
                foreach(session('orderterbaru')->orderproduk as $data)
                {
                    echo '
                    <div class="single-cart-item">
                        <a href="/detailorder/destroy/'.$data->pivot->id.'" class="product-image">
                            <img src="'.asset('/storage/produk/'.$data->lokasi_gambar.'').'" class="cart-thumb" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                            <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">'.$data->kategori->nama_kategori.'</span>
                                <h6>'.$data->nama_produk.' / Rp.'.$data->pivot->harga_produk.',00 </h6>
                                <p class="size">Total: '.$data->pivot->jumlah_beli.'</p>
                                <p class="price">'.$data->pivot->total_harga_produk.'</p>
                            </div>
                        </a>
                    </div>
                    
                    ';
                }
            ?>

        </div>

        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>nama user:</span> <span>{{session('orderterbaru')->profile->nama_profile}}</span></li>
                <li><span>total:</span> <span>Rp. {{session('orderterbaru')->total_harga}} ,00</span></li>
            </ul>
            <ul class="summary-table">
                    <li><span>alamat:</span> <span>{{session('orderterbaru')->profile->alamat}}</span></li>
                    <li><span>kurir:</span> <span>{{session('orderterbaru')->kurir->nama_kurir}}</span></li>
                </ul>
            <div class="checkout-btn mt-100">
                @if(session('orderterbaru')->status_pembayaran == 'READY')
                        
                    <a href="/order/pembayaran/{{session('orderterbaru')->id}}" class="btn essence-btn">upload data pembayaran</a>
                
                @elseif (session('orderterbaru')->status_pembayaran == 'BELUM LUNAS')
                
                    <a href="/order/checkout/{{session('orderterbaru')->id}}" class="btn essence-btn">checkout</a>
                
                @endif
            </div>
        </div>
    </div>
</div>
<!-- ##### Right Side Cart End ##### -->