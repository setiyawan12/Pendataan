
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>PLUG-IN V2</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset('assets_web_profile/images/favicon.ico') }}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- Link -->
@include('layouts.web_profile.partials.__link')
<!-- End Link -->

</head>


<!-- page wrapper -->
<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader">
        <div id="handle-preloader" class="handle-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                </div>
            </div>  
        </div>
    </div>
    <!-- preloader end -->


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span>Close</span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Finance</a></li>
                    <li><a href="index.html">Idea</a></li>
                    <li><a href="index.html">Service</a></li>
                    <li><a href="index.html">Growth</a></li>
                    <li><a href="index.html">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->

    <!-- main header -->
    <header class="main-header style-four">
        <div class="auto-container">
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img src="{{asset('assets_web_profile/images/logo-4.png')}}" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <figure class="logo-box"><a href="index.html"><img src="assets_web_profile/images/logo-4.png" alt=""></a></figure>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets_web_profile/images/logo-4.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-style-four">
        <div class="anim-icon">
            <span class="icon icon-1" style="background-image: url(assets_web_profile/images/icons/anim-icon-1.png);"></span>
            <span class="icon icon-2" style="background-image: url(assets_web_profile/images/icons/anim-icon-2.png);"></span>
            <span class="icon icon-3" style="background-image: url(assets_web_profile/images/icons/anim-icon-3.png);"></span>
        </div>
        <div class="pattern-layer" style="background-image: url(assets_web_profile/images/shape/shape-23.png);"></div>
        <figure class="image-layer"><img src="assets_web_profile/images/banner/banner-4-1.png" alt=""></figure>
        <div class="auto-container">
            <div class="row clearfix align-items-center">
                <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                    <div class="content-box">
                        <h2>Plugin-v2</h2>
                        <h1>Startup</h1>
                        <p>Harus menjelaskan kepada Anda bagaimana semua gagasan keliru tentang kesenangan dan pujian rasa sakit ini lahir dan akan memberi Anda penjelasan lengkap tentang sistem, dan menjelaskan ajaran yang sebenarnya.</p>
                        <a href="index-2.html" class="theme-btn style-nine">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- service-style-three -->
    <section class="service-style-three">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three wow flipInY" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h3><a href="service-details.html">Analis Individu</a></h3>
                            <figure class="image-box"><img src="assets_web_profile/images/service/service-1.png" alt=""></figure>
                            <p>Sederhana mudah membedakan dalam jam bebas saat pilihan daya kita.</p>
                            <div class="link"><a href="service-details.html"><i class="fas fa-angle-left"></i>Read More<i class="fas fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three wow flipInY" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('assets_web_profile/images/service/service-2.png') }}" alt=""></figure>
                            <h3><a href="service-details.html">Tim & Organisasi</a></h3>
                            <p>Oleh karena itu selalu peganglah hal-hal ini pada prinsip tolak kesenangan.</p>
                            <div class="link"><a href="service-details.html"><i class="fas fa-angle-left"></i>Read More<i class="fas fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-three wow flipInY" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <h3><a href="service-details.html">Embedded Analytics</a></h3>
                            <figure class="image-box"><img src="assets_web_profile/images/service/service-3.png" alt=""></figure>
                            <p>Masalah yang terikat memastikan kesalahan yang sama milik kelemahan</p>
                            <div class="link"><a href="service-details.html"><i class="fas fa-angle-left"></i>Read More<i class="fas fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-three end -->


    <!-- technology-style-two -->
    <section class="technology-style-two">
        <div class="upper-box">
            <div class="anim-icon">
                <span class="icon icon-7" style="background-image: url(assets_web_profile/images/icons/butterfly-1.png);"></span>
                <span class="icon icon-8" style="background-image: url(assets_web_profile/images/icons/butterfly-2.png);"></span>
            </div>
            <div class="auto-container">
                <div class="upper-inner">
                    <div class="sec-title text-center mb-50">
                        <p>Technologies</p>
                        <h2>Inspiring possibility for a brand’s<br />digital experience</h2>
                        <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-1.png);"></div>
                    </div>
                    <div class="image-box">
                
                        <figure class="image image-1"><img src="{{asset('assets_web_profile/resource/tab-1.png')}}" alt=""></figure>
                        <figure class="image image-2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets_web_profile/images/resource/phone-1.png" alt=""></figure>
                        <figure class="image image-3 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{asset('assets_web_profile/images/resource/screen-1.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-box">
            <div class="anim-icon">
                <span class="icon icon-1" style="background-image: url(assets_web_profile/images/icons/anim-icon-4.png);"></span>
                <span class="icon icon-2" style="background-image: url(assets_web_profile/images/icons/anim-icon-5.png);"></span>
                <span class="icon icon-3" style="background-image: url(assets_web_profile/images/icons/anim-icon-6.png);"></span>
                <span class="icon icon-4" style="background-image: url(assets_web_profile/images/icons/anim-icon-7.png);"></span>
                <span class="icon icon-5" style="background-image: url(assets_web_profile/images/icons/anim-icon-8.png);"></span>
                <span class="icon icon-6" style="background-image: url(assets_web_profile/images/icons/anim-icon-9.png);"></span>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 technology-block">
                        <div class="technology-block-two wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="border-box">
                                    <span class="border border-1"></span>
                                    <span class="border border-2"></span>
                                </div>
                                <figure class="image-box"><img src="assets_web_profile/images/resource/technonogy-1.png" alt=""></figure>
                                <div class="inner">
                                    <h3>Squad Networking</h3>
                                    <p>Squad yang berfokus dalam pembuatan serta pengelolaan suatu jaringan</p>
                                    <a href="index-4.html">Read More<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 technology-block">
                        <div class="technology-block-two wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="border-box">
                                    <span class="border border-1"></span>
                                    <span class="border border-2"></span>
                                </div>
                                <figure class="image-box"><img src="assets_web_profile/images/resource/technonogy-2.png" alt=""></figure>
                                <div class="inner">
                                    <h3>Squad UI / UX</h3>
                                    <p>Squad UI / UX adalah squad yang berperan dalam merancang desain antarmuka</p>
                                    <a href="index-4.html">Read More<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 technology-block">
                        <div class="technology-block-two wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="border-box">
                                    <span class="border border-1"></span>
                                    <span class="border border-2"></span>
                                </div>
                                <figure class="image-box"><img src="assets_web_profile/images/resource/technonogy-3.png" alt=""></figure>
                                <div class="inner">
                                    <h3>Squad Mobile Dev</h3>
                                    <p>Squad mobile adalah squad yang berfokus dalam membahas teknologi seputar pengembangan aplikasi.</p>
                                    <a href="index-4.html">Read More<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 technology-block">
                        <div class="technology-block-two wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="border-box">
                                    <span class="border border-1"></span>
                                    <span class="border border-2"></span>
                                </div>
                                <figure class="image-box"><img src="assets_web_profile/images/resource/technonogy-4.png" alt=""></figure>
                                <div class="inner">
                                    <h3>Squad Web Dev</h3>
                                    <p>Squad web adalah squad yang berfokus dalam membahas teknologi seputar pengembangan website.</p>
                                    <a href="index-4.html">Read More<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- technology-style-two end -->


    <!-- about-style-four -->
    <section class="about-style-four">
        <div class="pattern-layer" style="background-image: url(assets_web_profile/images/shape/shape-25.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_03">
                        <div class="image-box">
                            <div class="pattern-layer rotate-me" style="background-image: url(assets_web_profile/images/shape/shape-24.png);"></div>
                            <figure class="image image-1"><img src="assets_web_profile/images/resource/tab-2.png" alt=""></figure>
                            <figure class="image image-2 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets_web_profile/images/resource/screen-2.png" alt=""></figure>
                            <figure class="image image-3 wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets_web_profile/images/resource/screen-3.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_08">
                        <div class="content-box mt-10">
                            <div class="sec-title text-left">
                                <p>We are Plugin</p>
                                <h2>Analisis hebat yang melampaui organisasi Anda</h2>
                                <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-1.png);"></div>
                            </div>
                            <div class="text">
                                <p>Mengambil contoh sepele, siapa di antara kita yang pernah melakukan latihan fisik yang melelahkan, kecuali untuk mendapatkan keuntungan darinya yang tidak tahu bagaimana mengejar kesenangan yang dijumpai secara rasional.</p>
                            </div>
                            <ul class="list-item clearfix">
                                <li><span class="dots"></span>Idea of denouncing pleasure & praising</li>
                                <li><span class="dots"></span>Ever undertakes laborious physical</li>
                                <li><span class="dots"></span>Avoids a pain that produces no resultant</li>
                            </ul>
                            <div class="btn-box"><a href="about.html" class="theme-btn style-nine">Read More</a></div>
                            <div class="lower-text"><h6><i class="fas fa-angle-right"></i>What You Need? <a href="index-4.html">Meet Our Experts.</a></h6></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-four end -->


    <!-- chooseus-style-three -->
    <section class="chooseus-style-three">
        <div class="pattern-layer" style="background-image: url(assets_web_profile/images/shape/shape-26.png);"></div>
        <figure class="image-layer js-tilt"><img src="assets_web_profile/images/resource/illastration-5.png" alt=""></figure>
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <div class="col-xl-4 col-lg-6 col-md-12 inner-column">
                        <div class="inner-box">
                            <div class="sec-title text-left">
                                <p>Why Choose Us</p>
                                <h2>Alasan memilih</h2>
                                <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-1.png);"></div>
                            </div>
                            <div class="single-item">
                                <h3>Value for Results</h3>
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-analysis"></i></div>
                                    <p>Kecuali untuk mendapatkan keuntungan dari siapa yang berhak menemukan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 inner-column">
                        <div class="inner-box">
                            <div class="single-item">
                                <h3>Global Experience</h3>
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-global"></i></div>
                                    <p>Juga tidak ada orang yang mencintai atau mengejar atau menginginkan</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <h3>High-Quality Results</h3>
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-medal"></i></div>
                                    <p>Ini salah paham dengan kecaman dan lahirlah sistem yang lengkap.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-style-three end -->


    <!-- funfact-style-two -->
    <section class="funfact-style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="3.5">0</span>k
                            </div>
                            <h4>Projects Completed</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="2.8">0</span>k
                            </div>
                            <h4>Industrires Served</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="139">0</span>
                            </div>
                            <h4>Expert Team Mates</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                    <div class="counter-block-two wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="14">0</span>m
                            </div>
                            <h4>Happy Customers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact-style-two end -->


    <!-- skills-style-two -->
    <section class="skills-style-two">
        <div class="pattern-layer" style="background-image: url(assets_web_profile/images/shape/shape-27.png);"></div>
        <div class="anim-icon">
            <span class="icon icon-1" style="background-image: url(assets_web_profile/images/icons/anim-icon-1.png);"></span>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_02">
                        <div class="content-box">
                            <div class="sec-title text-left">
                                <p>Skills & Facts</p>
                                <h2>Kami terus memperbarui diri kami dengan tren terbaru</h2>
                                <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-1.png);"></div>
                            </div>
                            <div class="text">
                                <p>Sebagai perusahaan penyedia solusi, kami menawarkan berbagai konsultasi, layanan pengujian kualitas pengembangan dengan kepuasan 100%.</p>
                            </div>
                            <div class="inner-box">
                                <div class="progress-box">
                                    <h5>Data Consulting</h5>
                                    <div class="icon-box"><i class="flaticon-chat"></i></div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="62%"><div class="count-text">62%</div></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Big Data & BI</h5>
                                    <div class="icon-box"><i class="flaticon-cloud-computing"></i></div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="89%"><div class="count-text">89%</div></div>
                                    </div>
                                </div>
                                <div class="progress-box">
                                    <h5>Predictive Analysis</h5>
                                    <div class="icon-box"><i class="flaticon-analysis-1"></i></div>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="75%"><div class="count-text">75%</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="image-bg" style="background-image: url(assets_web_profile/images/shape/shape-28.png);"></div>
                        <figure class="image js-tilt"><img src="assets_web_profile/images/resource/screen-4.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- skills-style-two end -->


    <!-- testimonial-style-four -->
    <section class="testimonial-style-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                <p>Testimonials</p>
                <h2>What say our clients about our<br />awesome service</h2>
                <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-1.png);"></div>
            </div>
            <div class="inner-container">
                <div class="testimonial-carousel-3 owl-carousel owl-theme owl-dots-none">
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <div class="upper-box">
                                <figure class="logo-box"><img src="assets_web_profile/images/resource/testimonial-logo-1.png" alt=""></figure>
                                <p>Your guys were well knowledgeable, experienced, efficient and neat. A true to work with Windtech.</p>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                            </div>
                            <div class="author-info">
                                <figure class="image-box"><img src="assets_web_profile/images/resource/testimonial-5.png" alt=""></figure>
                                <h4>Shelly Johnson</h4>
                                <span class="designation">California</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <div class="upper-box">
                                <figure class="logo-box"><img src="assets_web_profile/images/resource/1&2.png" alt=""></figure>
                                <p>Blinded by desire that they foresee all pain and trouble that are bound ensue and equal blame belongs.</p>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                            </div>
                            <div class="author-info">
                                <figure class="image-box"><img src="assets_web_profile/images/resource/testimonial-6.png" alt=""></figure>
                                <h4>Cathrine Wagner</h4>
                                <span class="designation">Los Angeles</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-content">
                        <div class="inner-box">
                            <div class="upper-box">
                                <figure class="logo-box"><img src="assets_web_profile/images/resource/finalis.png" alt=""></figure>
                                <p>Power of choice is untrammelled and when nothing prevents our being to do what we like best.</p>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                    <li><i class="flaticon-stars"></i></li>
                                </ul>
                            </div>
                            <div class="author-info">
                                <figure class="image-box"><img src="assets_web_profile/images/resource/testimonial-7.png" alt=""></figure>
                                <h4>Cuthbert Brain</h4>
                                <span class="designation">California</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-four end -->


    <!-- subscribe-section -->
    <section class="subscribe-section">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets_web_profile/images/shape/shape-29.png);"></div>
            <div class="pattern-2" style="background-image: url(assets_web_profile/images/shape/shape-30.png);"></div>
        </div>
        <figure class="image-layer float-bob-y"><img src="assets_web_profile/images/resource/laptop-1.png" alt=""></figure>
        <div class="auto-container">
            <div class="sec-title text-center light">
                <p>Subscribe Us</p>
                <h2>Join with our global community</h2>
                <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-6.png);"></div>
            </div>
            <div class="inner-box text-center">
                <ul class="link-box clearfix">
                    <li><a href="index-4.html"><i class="flaticon-next"></i>Exclusive Offers & Discount</a></li>
                    <li><a href="index-4.html"><i class="flaticon-next"></i>Expert Advice & Tutorial</a></li>
                    <li><a href="index-4.html"><i class="flaticon-next"></i>Regular Updates in Inbox</a></li>
                </ul>
                <div class="subscribe-form">
                    <form action="index-4.html" method="post">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email Address..." required="">
                            <button type="submit" class="theme-btn style-nine"><i class="flaticon-next"></i></button>
                        </div>
                        <div class="form-group">
                            <div class="custom-controls-stacked">
                                <label class="custom-control material-checkbox">
                                <input type="checkbox" class="material-control-input">
                                <span class="material-control-indicator"></span>
                                <span class="description">accept naxly private policy</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->


    <!-- news-section -->
    <section class="news-section style-four">
        <div class="auto-container">
            <div class="upper-box clearfix mb-40">
                <div class="sec-title text-left pull-left">
                    <p>News & Updates</p>
                    <h2>Berita & pembaruan perusahaan</h2>
                    <div class="decor" style="background-image: url(assets_web_profile/images/icons/decor-1.png);"></div>
                </div>
                <div class="btn-box pull-right mt-60">
                    <a href="blog-1.html" class="theme-btn style-nine">Read More</a>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets_web_profile/images/news/news-1.jpg" alt="">
                                <a href="assets_web_profile/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="file-box"><i class="far fa-folder-open"></i><p>Data Engineering</p></div>
                                <div class="title-box">
                                    <div class="post-date"><p>05</p><span>Jan</span></div>
                                    <h4><a href="blog-details.html">Plugin Dinamakan sebagai Pemimpin Global dalam Big Data</a></h4>
                                </div>
                                <div class="link"><a href="blog-details.html">Read More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets_web_profile/images/news/news-4.jpg" alt="">
                                <a href="assets_web_profile/images/news/news-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="file-box"><i class="far fa-folder-open"></i><p>ML Consulting</p></div>
                                <div class="title-box">
                                    <div class="post-date"><p>01</p><span>Jan</span></div>
                                    <h4><a href="blog-details.html">Kondisi Infografis Kecerdasan Buatan Saat Ini.</a></h4>
                                </div>
                                <div class="link"><a href="blog-details.html">Read More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets_web_profile/images/news/news-5.jpg" alt="">
                                <a href="assets_web_profile/images/news/news-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="file-box"><i class="far fa-folder-open"></i><p>Data Strategy</p></div>
                                <div class="title-box">
                                    <div class="post-date"><p>25</p><span>Dec</span></div>
                                    <h4><a href="blog-details.html">Plugin sebagai Pemenang Global Agency Awards</a></h4>
                                </div>
                                <div class="link"><a href="blog-details.html">Read More<i class="fas fa-angle-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_09">
                        <div class="content-box">
                            <form method="post" action="assets_web_profile/inc/sendemail.php" id="contact-form" class="default-form"> 
                                <div class="form-group">
                                    <label><i class="far fa-user"></i>Your Name</label>
                                    <input type="text" name="username" placeholder="Enter name here" required="">
                                </div>
                                <div class="form-group">
                                    <label><i class="far fa-envelope"></i>Email Address</label>
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <label><i class="far fa-user"></i>Subject</label>
                                    <input type="text" name="subject" placeholder="Subject" required="">
                                </div>
                                <div class="form-group">
                                    <label><i class="fas fa-text-height"></i>Message</label>
                                    <textarea name="message" placeholder="Message goes here"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn style-nine" type="submit" name="submit-form">Send Your Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <figure class="image js-tilt"><img src="assets_web_profile/images/resource/illastration-6.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- footer-style-four -->
    <footer class="footer-style-four">
        <div class="pattern-layer" style="background-image: url(assets_web_profile/images/shape/shape-31.png);"></div>
        <div class="anim-icon">
            <span class="icon icon-4" style="background-image: url(assets_web_profile/images/icons/anim-icon-10.png);"></span>
            <span class="icon icon-5" style="background-image: url(assets_web_profile/images/icons/anim-icon-11.png);"></span>
            <span class="icon icon-6" style="background-image: url(assets_web_profile/images/icons/anim-icon-12.png);"></span>
        </div>
        <div class="auto-container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index.html"><img src="assets_web_profile/images/logo-4.png" alt=""></a></figure>
                                <div class="copyright">
                                    <p>Copyright &nbsp; <a href="index.html">Plugin</a>, All Rights Reserved.</p>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="index-4.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-4.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-4.html"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="index-4.html"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info-list clearfix">
                                        <li><i class="flaticon-music"></i><a href="tel:0055567890">+00 555 67 890</a></li>
                                        <li><i class="flaticon-gmail"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                        <li><i class="flaticon-world"></i>124, Queens walk 2nd cross newyork 5241</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Info</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>About Us</a></li>
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Projects</a></li>
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Services</a></li>
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Faq’s</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Individual</a></li>
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Team</a></li>
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Embeded</a></li>
                                        <li><a href="index-4.html"><i class="fas fa-angle-right"></i>Embeded</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="right-column">
                    <ul class="footer-nav">
                        <li><a href="index.html">Privacy Policy</a></li>
                        <li><a href="index.html">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-style-four end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>

@include('layouts.web_profile.partials.__script')

</body>
</html>
