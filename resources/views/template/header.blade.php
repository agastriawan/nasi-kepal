<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4">
                <div class="header-style">
                    <a href="{{ url('/') }}" style="display: flex; align-items: center;">
                        <img src="{{ asset('assets/img/logo.png') }}" height="100" width="100" alt="">
                        <span id="Quickeat" style="font-size: 20px; font-family: Poppins; font-weight: 700;">
                            <span style="color: #f29f05;">Vincent 2</span>
                        </span>
                    </a>

                    <div class="extras bag">
                        <a href="javascript:void(0)" class="menu-btn" id="pesan-tombol">
                            <span class="button button-2">Pesan</span>
                        </a>
                        <div class="bar-menu">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="navbar">
                    <ul class="navbar-links">
                        <li class="navbar-dropdown">
                            <a href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="navbar-dropdown">
                            <a href="#keunggulan">Keunggulan</a>
                        </li>
                        <li class="navbar-dropdown">
                            <a href="#tentang">Tentang</a>
                        </li>
                        <li class="navbar-dropdown">
                            <a href="#artikel">Artikel</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <div class="extras bag">
                    <a href="javascript:void(0)" id="desktop" class="menu-btn button button-2">Pesan</a>
                </div>
            </div>

            <div class="menu-wrap">
                <div class="menu-inner ps ps--active-x ps--active-y">
                    <span class="menu-cls-btn"><i class="cls-leftright"></i><i class="cls-rightleft"></i></span>
                    <div class="checkout-order">
                        <div class="title-checkout">
                            <h2>Menu</h2>
                        </div>

                        <ul>
                            <li class="price-list" data-name="Ayam Suwir Sambal Merah" data-price="5000">
                                <div class="counter-container">
                                    <div class="counter-food">
                                        <img alt="food" src="{{ asset('assets/img/hero5.png') }}">
                                        <h4>Ayam Suwir Sambal Merah</h4>
                                    </div>
                                </div>
                                <div class="price">
                                    <div>
                                        <h2>Rp. 5K</h2>
                                    </div>
                                    <div>
                                        <div class="qty-input">
                                            <button class="qty-count qty-count--minus" type="button">-</button>
                                            <input class="product-qty" type="number" value="0" min="0">
                                            <button class="qty-count qty-count--add" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="price-list" data-name="Ayam Suwir Sambal Hijau" data-price="5000">
                                <div class="counter-container">
                                    <div class="counter-food">
                                        <img alt="food" src="{{ asset('assets/img/hero6.png') }}">
                                        <h4>Ayam Suwir Sambal Hijau</h4>
                                    </div>
                                </div>
                                <div class="price">
                                    <div>
                                        <h2>Rp. 5K</h2>
                                    </div>
                                    <div>
                                        <div class="qty-input">
                                            <button class="qty-count qty-count--minus" type="button">-</button>
                                            <input class="product-qty" type="number" value="0" min="0">
                                            <button class="qty-count qty-count--add" type="button">+</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="totel-price">
                            <span>Total:</span>
                            <h2 id="total-price">Rp. 0</h2>
                        </div>
                        <button id="checkout" class="button-price m-2">Checkout</button>

                    </div>
                </div>
            </div>

            <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
                <div class="res-log">
                    <a href="{{ url('/') }}" style="display: flex; align-items: center;">
                        <img src="{{ asset('assets/img/logo.png') }}" height="100" width="100" alt="">
                        <span id="Quickeat" style="font-size: 20px; font-family: Poppins; font-weight: 700;">
                            <span style="color: #f29f05;">Vincent 2</span>
                        </span>
                    </a>
                </div>
                <ul>
                    <li class="navbar-dropdown active">
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="navbar-dropdown">
                        <a href="#keunggulan">Keunggulan</a>
                    </li>
                    <li class="navbar-dropdown">
                        <a href="#tentang">Tentang</a>
                    </li>
                    <li class="navbar-dropdown">
                        <a href="#artikel">Artikel</a>
                    </li>
                </ul>

                <a href="JavaScript:void(0)" id="res-cross"></a>
            </div>
        </div>
    </div>
</header>
