    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="/"><span class="logo-lg">OLSHOP<b>KU</b></span></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="/produk">Shop</a></li>
                            <li><a href="/order">Cek Order</a></li>
                            <li><a href="/">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Search Produk...">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- User Login Info -->
                <div class="classynav">
                        <ul>
                            <li><a href="#">{{session('user')->profile->nama_profile}}</a>
                                <div class="megamenu">
                                    <ul class="dropdown">
                                        <li class="title">{{session('user')->profile->nama_profile}}</li>
                                        <li>
                                            @if(session('user')->profile->lokasi_gambar == "awal")
                                                <img src="/img/bg-img/bg-6.jpg" alt="">
                                            @else
                                            <img src="{{ asset('/storage/profile/'.session("user")->profile->lokasi_gambar.'')}}" alt="">
                                            @endif
                                        </li>
                                        <li><a href="/profile">EDIT PROFILE</a></li>
                                        <li>
                                            <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                  
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>   
                                    </ul>
                                </div>
                            </li>
                        </ul>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="/img/core-img/bag.svg" alt=""> <span>
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
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    