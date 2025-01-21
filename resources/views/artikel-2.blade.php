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
                            <a href="#">Kewirausahaan</a>
                        </div>
                        <h2>Tantangan dan Keseruan di Mata Kuliah Kewirausahaan Nurul Fikri
                            2024</h2>
                        <ul class="data">
                            <li>
                                <h6><i class="fa-regular fa-calendar-days"></i>02 Jan 2025</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="offset-xl-2 col-xl-8 col-lg-12">
                    <div class="img-blog-full">
                        <img alt="blog-page-img" src="{{ asset('assets/img/title-2.jpg') }}">
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
                            Sebagai mahasiswa, kita sering bertanya-tanya: "Apa yang sebenarnya dibutuhkan untuk sukses setelah lulus?" Jawabannya tidak selalu IPK tinggi, tetapi kemampuan untuk menciptakan peluang. Nah, itulah mengapa Mata Kuliah Kewirausahaan di Nurul Fikri 2024 menjadi salah satu mata kuliah yang paling menarik dan relevan.  

                            <br>
                            <br>
                            Di mata kuliah ini, kami diajak untuk memahami apa itu kewirausahaan dan bagaimana cara memulai bisnis dari nol. Tapi tunggu dulu, ini bukan sekadar duduk di kelas dan mendengar teori. Kami benar-benar didorong untuk berpikir out of the box. Setiap minggu, ada diskusi interaktif, tugas kelompok, dan presentasi ide bisnis.  

                            <br>
                            <br>
                            Salah satu tugas favorit kami adalah membuat proposal bisnis. Tugas ini bikin kami jadi lebih kreatif dan berpikir praktis. Kami belajar cara menganalisis kebutuhan pasar, menentukan target konsumen, hingga menyusun strategi pemasaran. Ternyata, bikin bisnis itu nggak sesulit yang dibayangkan, asalkan kita tahu langkah-langkahnya.  

                            <br>
                            <br>
                            Selain itu, dosen di Nurul Fikri juga nggak segan membagikan pengalaman mereka di dunia bisnis. Cerita-cerita ini bikin suasana kelas jadi hidup dan memotivasi kami untuk terus mencoba. Yang lebih keren lagi, beberapa alumni Nurul Fikri sudah sukses menjalankan usaha sendiri setelah mempelajari mata kuliah ini.  

                            <br>
                            <br>
                            Bagi kami, Mata Kuliah Kewirausahaan bukan cuma soal nilai atau tugas. Ini adalah bekal hidup yang nggak akan habis dimakan waktu. Jadi, buat teman-teman mahasiswa, jangan sia-siakan kesempatan belajar ini. Yuk, mulai rancang ide bisnis kita dari sekarang dan tunjukkan kalau kita juga bisa jadi entrepreneur muda yang sukses!
                        </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('template_scripts')
@endsection
