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
                            <a href="#">Kewirausahaan</a>
                        </div>
                        <h2>Menjadi Wirausaha Muda Bersama Mata Kuliah Kewirausahaan Nurul Fikri 2024</h2>
                        <ul class="data">
                            <li>
                                <h6><i class="fa-regular fa-calendar-days"></i>01 Jan 2025</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-8 col-lg-12">
                    <div class="img-blog-full">
                        <img alt="blog-page-img" src="{{ asset('assets/img/title-1.jpg') }}">
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
                            Di era modern ini, kewirausahaan bukan lagi sekadar pilihan, melainkan kebutuhan. Sebagai
                            mahasiswa, kita harus peka terhadap peluang dan terus berinovasi. Mata Kuliah Kewirausahaan di
                            Nurul Fikri 2024 hadir sebagai solusi nyata bagi mahasiswa yang ingin memahami dan terjun
                            langsung ke dunia bisnis.

                            <br>
                            <br>
                            Mata kuliah ini dirancang untuk memberikan pembekalan yang tidak hanya teoritis, tetapi juga
                            praktis. Dalam kelas ini, kami belajar bagaimana mengenali masalah di sekitar kita dan
                            mengubahnya menjadi peluang bisnis. Dimulai dari brainstorming ide, menyusun model bisnis,
                            hingga simulasi cara mengelola usaha.

                            <br>
                            <br>
                            Kewirausahaan bukan hanya soal untung-rugi, tetapi juga tentang kreativitas, keberanian
                            mengambil risiko, dan manajemen yang baik. Yang menarik, di sini kami tidak hanya belajar dari
                            buku, tetapi juga melalui studi kasus nyata dan bimbingan dari dosen yang sudah berpengalaman di
                            bidang bisnis.

                            <br>
                            <br>
                            Sebagai mahasiswa, pengalaman ini sangat berharga. Mata kuliah ini mendorong kami untuk berpikir
                            kritis, bekerja dalam tim, dan menghadirkan solusi kreatif untuk masalah sehari-hari. Selain
                            itu, siapa tahu, ide bisnis yang kami rancang dalam kelas ini bisa menjadi startup besar di masa
                            depan!

                            <br>
                            <br>
                            Mata Kuliah Kewirausahaan di Nurul Fikri bukan sekadar pelajaran biasa. Ini adalah langkah awal
                            untuk memulai perjalanan sebagai entrepreneur muda. Jadi, ayo manfaatkan kesempatan ini sebaik
                            mungkin dan jadilah agen perubahan melalui bisnis yang kita ciptakan!
                        </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('template_scripts')
@endsection
