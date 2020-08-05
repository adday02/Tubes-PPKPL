<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Giyok Putra</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="{{url('/')}}">
                <img src="images/logo.svg" alt="Homepage">
            </a>
        </div>

        <nav class="row header-nav-wrap wide">
            <ul class="header-main-nav">
                <li class="current"><a class="smoothscroll" href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll" href="#instrukut" title="instrukut">Instruktur</a></li>
                <li><a class="smoothscroll" href="#testimoni" title="testimoni">Alur Belajar & Testimoni</a></li>
                <li><a class="smoothscroll" href="#paket" title="paket">Paket</a></li>
                <li><a class="smoothscroll" href="#kontak" title="kontak">Kontak</a></li>
            </ul>

            <ul class="header-social">
                <li><a href="{{url('/masuk')}}">Login</a></li>
                <li><a href="{{url('/daftar')}}">Daftar</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#"><span>Menu</span></a>
    
    </header> <!-- end header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section">

        <div class="home-image-part"></div>

        <div class="home-content">

            <div class="row home-content__main wide">

                <h1>
                Apa itu kursus mengemudi<br>
                Giyok Putra?
                </h1>

                <h3>
                Kusus mengemudi Giyok Putra adalah salah satu mitra kami yang menyediakan layanan kursus mengemudi yang berada di Jl. Bangkir Celeng Desa Sindang Kerta Indramayu. Kursus mengemudi tersebut sudah memiliki 3 cabang diantaranya berada di daerah Jangga, Karangsinom dan Kertasmaya

                </h3>

                </div> <!-- end home-content__main -->

            <a href="#about" class="home-scroll smoothscroll">
                <span class="home-scroll__text">Scroll Down</span>
                <span class="home-scroll__icon"></span>
            </a>

        </div> <!-- end home-content -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="instrukut" class="s-about target-section" >

        <div class="row section-header narrower align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Instruktur
                </h1>
            </div>

        </div> <!-- end section-header -->
			<div class="row testimonials" data-aos="fade-up">

                <div class="col-full slick-slider testimonials__slider">
                    @foreach($instruktur as $data_instruktur)
                    <div class="testimonials__slide">
                        <img height="500px" width="200px" src="{{URL::to('/')}}/foto/{{$data_instruktur->foto}}" class="fa-image" href="URL::to('/')}}/foto/{{$data_instruktur->foto}}" / >
                        <h5>{{$data_instruktur->nama}}</h5>
                        <p>
                        No HP          : {{$data_instruktur->no_hp}}<br>
                        Jenis Kelamin  : {{$data_instruktur->jk}}<br>
                        Alamat         : {{$data_instruktur->alamat}}<br>
                        </p>
                    </div>        
                    @endforeach
                </div> <!-- end testimonials__slider -->

            </div>
        

    </section> <!-- end s-about -->


    <!-- process
    ================================================== -->
    <section id="testimoni" class="s-process target-section">

        <div class="row">
            <div class="col-full text-center" data-aos="fade-up">
                <h2 class="display-2">Alur Pembelajaran</h2>
            </div>
        </div>

        <div class="row process block-1-4 block-m-1-2 block-tab-full">
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3> Trek Lurus </h3>
                    <p>
                    Bagaimana mengontrol gigi dan compling pada trek lurus pada keadaan rameh dan sepi
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Belok</h3>
                    <p>
                    Bagaimana belok pada tikungan sempit dan lebar serta bagaimana mengontrol gas dan compling 
                    </p>
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Jalan Sempit</h3>
                    <p>
                    Bagaimana berjalan dijalan yang sempit agar bisa mengontrol samping kanan dan kiri
                </div>
            </div>
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Jalan Rameh</h3>
                    <p>
                    bagaimana berjalan dijalan rame dengan kecepatan perjalanan orang yang cepat 
                    </p>
                </div>
            </div>

				<div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>Latihan Ujian</h3>
                    <p>
   					Ujian mundur 200 cm, ujian parkir kiri kanan, ujian berhenti ditanjakan tanpa rem, ujian tanjakan maju dan mundur
                    </p>
                </div>
            </div>
        </div> <!-- end process -->
        </div> <!-- end process -->

       <div class="row section-header narrower align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Testimoni
                </h1>
            </div>

        </div> <!-- end section-header -->

        <div class="row testimonials" data-aos="fade-up">

                <div class="col-full slick-slider testimonials__slider">
                    @foreach($testimoni as $data_testimoni)
                    <div class="testimonials__slide">
                        <img height="500px" width="200px" src="{{URL::to('/')}}/foto/{{$data_testimoni
                        ->foto}}" class="fa-image" href="URL::to('/')}}/foto/{{$data_testimoni
                        ->foto}}" / >
                    </div>        
                    @endforeach
                </div> <!-- end testimonials__slider -->

            </div>
    </section> <!-- end s-process -->


    <!-- features
    ================================================== -->
    <section id="paket" class="s-features target-section">

        <div class="row section-header narrower align-center has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Paket 
                </h1>
            </div>

        </div> <!-- end section-header -->
        <div class="row process block-1-4 block-m-1-2 block-tab-full">
            @foreach($paket as $data_paket)
            <div class="col-block item-process" data-aos="fade-up">
                <div class="item-process__text">
                    <h3>{{$data_paket->nama}}</h3>
                    <p> Harga   : {{$data_paket->harga}}<br>
                        Waktu   : {{$data_paket->waktu}} Kali Pertemuan<br>
                        Mobil   : {{$data_paket->mobil}}<br>
                    
                    </p>
                </div>
            </div>
            @endforeach          
        </div>

        
    </section> <!-- end s-features -->


    <!-- pricing
    ================================================== -->
    <section id="kontak" class="s-pricing target-section">

        <div class="row section-header narrower align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                   KONTAK
                </h1>
                <p class="lead">
                    Jika anda membutuhkan bantuan silahkan hubungi kami atau datang langsung di tempat kami 
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row plans block-1-3 block-m-1-2 block-tab-full stack">

            <div class="col-block item-plan" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <p class="item-plan__price">Telepon</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features disc">
                            <li><span>082295073111 </span>(Telkomsel)</li>
                            <li><span>087717771654 </span>(XL)</li>
                        </ul>
                    </div>  
                
                </div>
            </div> <!-- end item-plan -->

            <div class="col-block item-plan item-plan--popular" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <p class="item-plan__price">Facebook</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features disc">
                            <li><span>Giyok Putra </span>(Akun Kursus)</li>
                            <li><span>Mohamad Riko </span>(Akun Pemilik)</li>
                        </ul>

                    </div>  
                
                </div>
            </div> <!-- end item-plan -->

            <div class="col-block item-plan" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <p class="item-plan__price">Instagram</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features disc">
                            <li><span>giyok_putra </span>(Akun Kursus)</li>
                            <li><span>adday_alfayni </span>(Akun Pemilik)</li>
                            </ul>
                    </div>  
                
                </div>

            </div> <!-- end item-plan -->
            <div class="row section-header narrower align-center"> 
                     <div class="item-plan__top-part">
                        <p class="item-plan__price">Alamat</p>
                    </div>
                    <div class="item-plan__bottom-part">
                        Jalan Raya Sindangkerta RT. 01 RW. 01 No.35 Desa Sindangkerta Kec. Lohbener Kab. Indramayu Kode Pos 45252.<br>
                        Klik map di bawah ini untuk mengetahui lokasi.<br>    
                    </div>  
                        <a href="https://www.google.co.id/maps/place/Kursus+Mengemudi+Giyok+Putra/@-6.4019285,108.168477,17z/data=!4m5!3m4!1s0x2e6eb73f34ad9c75:0xa09aed42f7594efc!8m2!3d-6.4032133!4d108.1687559">
                        <img src="images/Capture.PNG" srcset="images/Capture.PNG 1x, images/Capture.PNG 2x">
                    </a>
            </div> <!-- end plans -->

    </section> <!-- end s-pricing -->


    <!-- download
    ================================================== -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>