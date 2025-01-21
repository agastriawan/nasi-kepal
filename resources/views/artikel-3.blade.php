@extends('template/main')

@section('template_styles')
@endsection
@section('content')
 

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
                        <h2>Pengalaman Belajar Kewirausahaan di Kampus Nurul Fikri Bersama Wulan Fitriani, S.Kom</h2>
                        <ul class="data">
                            <li>
                                <h6><i class="fa-regular fa-calendar-days"></i>03 Jan 2025</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-8 col-lg-12">
                    <div class="img-blog-full">
                        <img alt="blog-page-img" src="{{ asset('assets/img/title-3.jpg') }}">
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
                            Sebagai mahasiswa semester 3 di Kampus Nurul Fikri, mengambil mata kuliah Kewirausahaan yang diampu oleh Ibu Wulan Fitriani, S.Kom, menjadi pengalaman yang sangat menarik dan membuka wawasan. Mata kuliah ini memberikan pemahaman mendalam tentang bagaimana membangun sebuah bisnis dari awal, mulai dari konsep hingga strategi pelaksanaannya.  

                            <br>
                            <br>
                            Di kelas ini, kami diajarkan untuk berpikir kreatif dan inovatif dalam menemukan ide bisnis. Ibu Wulan selalu menekankan pentingnya menganalisis kebutuhan pasar dan memanfaatkan peluang yang ada. Salah satu metode pembelajaran yang menarik adalah diskusi kelompok, di mana kami bekerja sama untuk merancang ide bisnis yang dapat dijalankan secara nyata.  

                            <br>
                            <br>
                            Selain teori, kami juga mendapatkan studi kasus nyata yang membantu memahami tantangan dalam dunia bisnis. Ibu Wulan sering membagikan pengalaman dan tips praktis dalam menghadapi risiko serta bagaimana memanfaatkan teknologi sebagai alat untuk mendukung pengembangan usaha. Pendekatan ini membuat materi yang disampaikan menjadi relevan dengan dunia kerja saat ini.  
 

                            <br>
                            <br>
                            Sebagai mahasiswa, pengalaman belajar ini sangat bermanfaat. Kami tidak hanya mendapatkan ilmu, tetapi juga termotivasi untuk mengembangkan potensi diri sebagai calon wirausaha muda. Banyak teman sekelas yang merasa lebih percaya diri untuk memulai usaha kecil setelah mengikuti mata kuliah ini.  


                            <br>
                            <br>
                            Dengan pembelajaran yang interaktif dan relevan seperti ini, tidak heran jika Kampus Nurul Fikri menjadi salah satu institusi pendidikan yang terus menarik perhatian. Mata kuliah Kewirausahaan yang diampu oleh Ibu Wulan Fitriani, S.Kom, adalah salah satu alasan mengapa kuliah di sini menjadi pengalaman yang berharga bagi kami.  
                        </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('template_scripts')
@endsection
