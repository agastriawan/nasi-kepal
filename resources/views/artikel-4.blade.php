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

    <section class="hero-section about single-blog gap" style="background-image: url(assets/img/background-3.png);"
        data-aos="flip-up" data-aos-delay="300" data-aos-duration="400">
        <div class="container">
            <div class="row align-items-center">
                <div class="offset-xl-2 col-xl-8 col-lg-12">
                    <div class="about-text">
                        <ul class="crumbs d-flex">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="two"><a href="#"><i class="fa-solid fa-right-long"></i>Artikel</a></li>
                        </ul>
                        <div class="quickeat">
                            <a href="#">Pengalaman Belajar</a>
                        </div>
                        <h2>Membangun Jiwa Entrepreneur Bersama Kewirausahaan Nurul Fikri</h2>
                        <ul class="data">
                            <li>
                                <h6><i class="fa-regular fa-calendar-days"></i>04 Jan 2025</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-8 col-lg-12">
                    <div class="img-blog-full">
                        <img alt="blog-page-img" src="{{ asset('assets/img/title-4.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-content gap no-top">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12">
                    <div class="title-container">
                        <p style="text-align: justify;">

                            Mata kuliah Kewirausahaan di Kampus Nurul Fikri adalah salah satu pengalaman belajar terbaik
                            yang saya rasakan sebagai mahasiswa semester 3. Dengan dosen pengampu Ibu Wulan Fitriani, S.Kom,
                            kami tidak hanya belajar teori, tetapi juga praktik langsung bagaimana memulai dan mengelola
                            bisnis.


                            <br>
                            <br>
                            Di awal perkuliahan, Ibu Wulan mengajak kami untuk mengenali potensi diri dan peluang di
                            sekitar. Proses ini sangat membantu kami memahami langkah awal yang dibutuhkan untuk menjadi
                            seorang entrepreneur. Setiap mahasiswa diberi kesempatan untuk mengemukakan ide bisnis mereka,
                            lalu ide tersebut dikembangkan melalui diskusi dan tugas kelompok.


                            <br>
                            <br>
                            Salah satu hal yang membuat mata kuliah ini berbeda adalah cara Ibu Wulan menyampaikan materi.
                            Beliau selalu membawa contoh-contoh nyata dari dunia bisnis, sehingga pembelajaran terasa lebih
                            aplikatif. Misalnya, kami belajar tentang pentingnya pemasaran digital di era modern dan
                            bagaimana memanfaatkan platform seperti media sosial untuk memperluas jangkauan pasar.


                            <br>
                            <br>

                            Tidak hanya itu, kami juga dilatih untuk membuat rencana bisnis yang komprehensif, mulai dari
                            analisis SWOT, pengelolaan modal, hingga strategi pemasaran. Proses ini memberikan gambaran
                            nyata tentang bagaimana bisnis dirancang dan dijalankan. Bagi kami, ini bukan sekadar tugas
                            kuliah, tetapi simulasi langsung untuk mempersiapkan diri di dunia nyata.



                            <br>
                            <br>
                            Melalui mata kuliah Kewirausahaan ini, Kampus Nurul Fikri menunjukkan komitmennya untuk mencetak
                            generasi muda yang kreatif, inovatif, dan berdaya saing. Dengan bimbingan dari dosen-dosen
                            berkualitas seperti Ibu Wulan Fitriani, S.Kom, kami yakin mampu menghadapi tantangan dunia
                            bisnis di masa depan.
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection
@section('template_scripts')
@endsection
