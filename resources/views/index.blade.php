@extends('template/main')

@section('template_styles')
@endsection
@section('content')
    <div class="page-loader">
        <div class="wrapper">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <div class="shadow"></div>
            <span>Loading</span>
        </div>
    </div>

    <section class="hero-section" id="beranda" style="background-image: url(assets/img/background-1.png);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="restaurant">
                        <h1>Nasi Kepal <span style="color:var(--color-theme);">Vincent 2</span></h1>
                        <p>Masih mikir beli satu? Dua aja biar makin kenyang!</p>
                        <div class="nice-select-one">
                            <a href="javascript:void(0)" id="desktop" class="menu-btn button button-2">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="img-restaurant">
                        <img alt="man" src="{{ asset('assets/img/hero5.png') }}">
                        <div class="wilmington" style="margin-top:3rem !important;">
                            <i id="lingkaran"></i>
                            <div>
                                <p>praktis, enak, mengenyangkan</p>
                                <h6>Cepat Saji</h6>
                            </div>
                        </div>
                        <div class="wilmington location-restaurant">
                            <i class=""></i>
                            <div>
                                <h6>2 Menu</h6>
                                <p>dua menu tersedia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="works-section gap" id="keunggulan">
        <div class="container">
            <div class="hading" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                <h2>Keunggulan Kami</h2>
                <p>Hadir untuk memenuhi kebutuhan Anda dengan nasi kepal yang tidak hanya lezat, tetapi juga inovatif dan
                    terjangkau. Kami percaya bahwa makanan sederhana dapat menjadi istimewa.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="work-card">
                        {{-- <img alt="img" src=""> --}}
                        <h4><span>01</span> Ukuran Lebih Besar</h4>
                        <p>Nasi kepal kami hadir dengan porsi yang lebih besar untuk memastikan Anda kenyang dan puas. Cocok
                            untuk dinikmati kapan saja.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="work-card">
                        {{-- <img alt="img" src=""> --}}
                        <h4><span>02</span> Isi Lebih Beragam</h4>
                        <p>Kami menawarkan berbagai pilihan isi, mulai dari ayam teriyaki hingga tuna pedas. Rasakan
                            kelezatan setiap gigitan dengan bahan berkualitas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="400" data-aos-duration="500">
                    <div class="work-card">
                        {{-- <img alt="img" src=""> --}}
                        <h4><span>03</span> Harga Terjangkau</h4>
                        <p>Kami memberikan nasi kepal berkualitas dengan harga yang ramah di kantong. Makan enak tidak harus
                            mahal!</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="your-favorite-food gap" style="background-image: url(assets/img/background-1.png);" id="tentang">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="food-photo-section">
                        <img alt="img" src="{{ asset('assets/img/logo.png') }}">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="food-content-section">
                        <h2>Latar Belakang</h2>
                        <p style="text-align: justify;">Berdasarkan kehidupan sehari-hari, terutama bagi pelajar dan
                            mahasiswa, waktu sering kali menjadi hambatan untuk menikmati makanan yang sehat, lezat, murah,
                            dan mengenyangkan. Sebagian besar dari mereka memilih makanan cepat saji, namun sering kali
                            mengorbankan kualitas gizi dan cita rasa. Dengan demikian, "Nasi Kepal Vincent 2" muncul sebagai
                            jawaban yang menggabungkan kemudahan, cita rasa yang nikmat, serta harga yang terjangkau. Dengan
                            ide makanan yang bisa dinikmati tanpa peralatan makan, produk ini sangat tepat untuk pelajar dan
                            mahasiswa yang sering makan ketika beraktivitas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counters-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="200"
                    data-aos-duration="300">
                    <div>
                        <h2>Solusi yang kami tawarkan</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="300"
                    data-aos-duration="400">
                    <div class="count-time">
                        <h2 class="timer count-title count-number" data-to="1" data-speed="2000">1</h2>
                        <p>Kepraktisan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="400"
                    data-aos-duration="500">
                    <div class="count-time">
                        <h2 class="timer count-title count-number" data-to="2" data-speed="2000">2</h2>
                        <p>Kualitas Rasa</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="flip-up" data-aos-delay="500"
                    data-aos-duration="600">
                    <div class="count-time sp">
                        <h2 class="timer count-title count-number me-2" data-to="3" data-speed="2000">3</h2>
                        <p>Harga Yang Terjangkau</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews-sections gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12" data-aos="fade-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="reviews-content">
                        <h2>Testimoni</h2>
                        <div class="custome owl-carousel owl-theme">
                            <div class="item">
                                <h4>"Nasi Kepal Vincent 2 benar-benar menjadi solusi saat saya butuh makanan praktis, lezat,
                                    dan mengenyangkan! Sangat cocok untuk jadwal sibuk saya sebagai mahasiswa."</h4>
                                <div class="thomas">
                                    <div>
                                        <h6>Ahmad Hilmy</h6>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4>"Saya suka dengan variasi isiannya! Mulai dari ayam teriyaki hingga tuna pedas, semuanya
                                    terasa enak dan bikin nagih. Plus, harganya ramah di kantong!"</h4>
                                <div class="thomas">
                                    <div>
                                        <h6>Ahmad Faiz</h6>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <h4>"Nasi kepal ini sangat praktis! Saya bisa menikmatinya di mana saja tanpa perlu sendok
                                    atau garpu. Benar-benar makanan yang dirancang untuk gaya hidup aktif."</h4>
                                <div class="thomas">
                                    <div>
                                        <h6>Septian SI</h6>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12" data-aos="fade-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="reviews-img">
                        <img alt="photo" src="{{ asset('assets/img/photo-4.png') }}">
                        <i class="fa-regular fa-thumbs-up"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section gap" id="artikel">
        <div class="container">
            <h2>Artikel</h2>
            <div class="row">
                <div class="col-xl-6 col-lg-12" data-aos="flip-up" data-aos-delay="200" data-aos-duration="300">
                    <div class="news-posts-one">
                        <img alt="man" src="">
                        <div class="quickeat">
                            <a href="#">news</a>
                            <a href="#">quickeat</a>
                        </div>
                        <h3>We Have Received An Award For The Quality Of Our Work</h3>
                        <p>Donec adipiscing tristique risus nec feugiat in fermentum. Sapien eget mi proin sed libero.
                            Et magnis dis parturient montes nascetur.
                            Praesent semper feugiat nibh sed pulvinar proin gravida.</p>
                        <a href="#">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        <ul class="data">
                            <li>
                                <h6><i class="fa-solid fa-user"></i>by Quickeat</h6>
                            </li>
                            <li>
                                <h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6>
                            </li>
                            <li>
                                <h6><i class="fa-solid fa-eye"></i>132</h6>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-12" data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
                    <div class="news-post-two">
                        <img alt="food-img" src="">
                        <div class="news-post-two-data">
                            <div class="quickeat">
                                <a href="#">restaurants</a>
                                <a href="#">cooking</a>
                            </div>
                            <h6><a href="single-blog.html">With Quickeat you can order food for
                                    the whole day</a></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor...</p>
                            <ul class="data">
                                <li>
                                    <h6><i class="fa-solid fa-user"></i>by Quickeat</h6>
                                </li>
                                <li>
                                    <h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6>
                                </li>
                                <li>
                                    <h6><i class="fa-solid fa-eye"></i>132</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-post-two">
                        <img alt="food-img" src="">
                        <div class="news-post-two-data">
                            <div class="quickeat">
                                <a href="#">restaurants</a>
                                <a href="#">cooking</a>
                            </div>
                            <h6><a href="single-blog.html">127+ Couriers On Our Team!</a></h6>
                            <p>Urna condimentum mattis pellentesque id nibh tortor id aliquet. Tellus at urna
                                condimentum mattis...</p>
                            <ul class="data">
                                <li>
                                    <h6><i class="fa-solid fa-user"></i>by Quickeat</h6>
                                </li>
                                <li>
                                    <h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6>
                                </li>
                                <li>
                                    <h6><i class="fa-solid fa-eye"></i>132</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="news-post-two end">
                        <img alt="food-img" src="">
                        <div class="news-post-two-data">
                            <div class="quickeat">
                                <a href="#">restaurants</a>
                                <a href="#">cooking</a>
                            </div>
                            <h6><a href="single-blog.html">Why You Should Optimize Your
                                    Menu for Delivery</a></h6>
                            <p>Enim lobortis scelerisque fermentum dui. Sit amet cursus sit amet dictum sit amet. Rutrum
                                tellus...</p>
                            <ul class="data">
                                <li>
                                    <h6><i class="fa-solid fa-user"></i>by Quickeat</h6>
                                </li>
                                <li>
                                    <h6><i class="fa-regular fa-calendar-days"></i>01.Jan. 2022</h6>
                                </li>
                                <li>
                                    <h6><i class="fa-solid fa-eye"></i>132</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('template_scripts')
@endsection
