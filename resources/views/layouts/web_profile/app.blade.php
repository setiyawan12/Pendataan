
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Naxly - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

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
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="X" class="letters-loading">
                        X
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="Y" class="letters-loading">
                        Y
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
    <header class="main-header style-two">
        <div class="header-top">
            <div class="large-container">
                <div class="top-inner clearfix">
                    <div class="top-left pull-left clearfix">
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-skype"></i></a></li>
                        </ul>
                        <ul class="links clearfix">
                            <li><a href="index.html">Faq’s</a></li>
                            <li><a href="index.html">Career</a></li>
                            <li><a href="index.html">News</a></li>
                        </ul>
                        <div class="request-btn"><i class="flaticon-next"></i><a href="index.html">Request for Demo</a></div>
                    </div>
                    <div class="top-right pull-right clearfix">
                        <div class="support"><i class="flaticon-music"></i><span>Start your project today</span><a href="tel:0055567890">+00 555 67 890</a></div>
                        <div class="search-box-outer">
                            <form action="index.html" method="post" class="search-btn">
                                <button type="button" class="search-toggler"><i class="flaticon-search"></i>Search</button>
                            </form>
                        </div>
                        <div class="language">
                            <div class="lang-btn">
                                <span class="flag"><img src="assets/images/icons/icon-lang.png" alt="" title="English"></span>
                                <span class="txt">Eng</span>
                                <span class="arrow fa fa-angle-down"></span>
                            </div>
                            <div class="lang-dropdown">
                                <ul>
                                    <li><a href="index.html">German</a></li>
                                    <li><a href="index.html">Italian</a></li>
                                    <li><a href="index.html">Chinese</a></li>
                                    <li><a href="index.html">Russian</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="large-container">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img src="assets/images/logo-2.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="index-2.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Data Science<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-2.html">Artificial intelligence<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-3.html">Machine Learning<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-4.html">Business Intelligence<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-5.html">User Analysis<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-boxed.html">Home Boxed<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-rtl.html">Home RTL<i class="flaticon-next"></i></a></li>
                                            <li><a href="index-onepage.html">Home OnePage<i class="flaticon-next"></i></a></li>
                                            <li class="dropdown"><a href="index-2.html">Header Styles</a>
                                                <ul>
                                                    <li><a href="index.html">Header Style One<i class="flaticon-next"></i></a></li>
                                                    <li><a href="index-2.html">Header Style Two<i class="flaticon-next"></i></a></li>
                                                    <li><a href="index-3.html">Header Style Three<i class="flaticon-next"></i></a></li>
                                                    <li><a href="index-4.html">Header Style Four<i class="flaticon-next"></i></a></li>
                                                    <li><a href="index-5.html">Header Style Five<i class="flaticon-next"></i></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="index-2.html">Company</a>
                                        <ul>
                                            <li><a href="about.html">About Company<i class="flaticon-next"></i></a></li>
                                            <li><a href="team.html">Meet Our Team<i class="flaticon-next"></i></a></li>
                                            <li><a href="contact.html">Contact Us<i class="flaticon-next"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Services</a>
                                        <ul>
                                            <li><a href="service.html">All Services<i class="flaticon-next"></i></a></li>
                                            <li><a href="service-details.html">Service Details<i class="flaticon-next"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Works</a>
                                        <ul>
                                            <li><a href="project.html">Project 2 Columns<i class="flaticon-next"></i></a></li>
                                            <li><a href="project-2.html">Project 3 Columns<i class="flaticon-next"></i></a></li>
                                            <li><a href="project-3.html">Case Studies<i class="flaticon-next"></i></a></li>
                                            <li><a href="project-details.html">Case Details<i class="flaticon-next"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-1.html">Classic Grid<i class="flaticon-next"></i></a></li>
                                            <li><a href="blog-2.html">Classic With S/B<i class="flaticon-next"></i></a></li>
                                            <li><a href="blog-3.html">Modern With S/B<i class="flaticon-next"></i></a></li>
                                            <li><a href="blog-4.html">Masonry<i class="flaticon-next"></i></a></li>
                                            <li><a href="blog-details.html">Single Post<i class="flaticon-next"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Elements</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 1</h4></li>
                                                        <li><a href="service-element-1.html">Service 01</a></li>
                                                        <li><a href="service-element-2.html">Service 02</a></li>
                                                        <li><a href="about-element-1.html">About 01</a></li>
                                                        <li><a href="about-element-2.html">About 02</a></li>
                                                        <li><a href="about-element-3.html">About 03</a></li>
                                                        <li><a href="about-element-4.html">About 04</a></li>
                                                        <li><a href="about-element-5.html">About 05</a></li>
                                                        <li><a href="about-element-6.html">About 06</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 2</h4></li>
                                                        <li><a href="work-element-1.html">Work 01</a></li>
                                                        <li><a href="work-element-2.html">Work 02</a></li>
                                                        <li><a href="skills-element-1.html">Skills 01</a></li>
                                                        <li><a href="skills-element-2.html">Skills 02</a></li>
                                                        <li><a href="case-element-1.html">Case 01</a></li>
                                                        <li><a href="case-element-2.html">Case 02</a></li>
                                                        <li><a href="case-element-3.html">Case 03</a></li>
                                                        <li><a href="case-element-4.html">Case 04</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 3</h4></li>
                                                        <li><a href="counter-element-1.html">Fun Fact 01</a></li>
                                                        <li><a href="counter-element-2.html">Fun Fact 02</a></li>
                                                        <li><a href="counter-element-3.html">Fun Fact 03</a></li>
                                                        <li><a href="counter-element-4.html">Fun Fact 04</a></li>
                                                        <li><a href="news-element-1.html">News 01</a></li>
                                                        <li><a href="news-element-2.html">News 02</a></li>
                                                        <li><a href="news-element-3.html">News 03</a></li>
                                                        <li><a href="news-element-4.html">News 04</a></li>
                                                    </ul>
                                                </div> 
                                                <div class="col-lg-3 column">
                                                    <ul>
                                                        <li><h4>Elements 4</h4></li>
                                                        <li><a href="choose-element-1.html">Choose Us 01</a></li>
                                                        <li><a href="choose-element-2.html">Choose Us 02</a></li>
                                                        <li><a href="choose-element-3.html">Choose Us 03</a></li>
                                                        <li><a href="team-element-1.html">Team 01</a></li>
                                                        <li><a href="team-element-2.html">Team 02</a></li>
                                                        <li><a href="team-element-3.html">Team 03</a></li>
                                                        <li><a href="team-element-4.html">Team 04</a></li>
                                                        <li><a href="technology-element-1.html">Technology</a></li>
                                                    </ul>
                                                </div>                                            
                                            </div>                                                
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Pages</a>
                                        <ul>
                                            <li><a href="error.html">404<i class="flaticon-next"></i></a></li>
                                            <li><a href="coming-soon.html">Coming Soon<i class="flaticon-next"></i></a></li>
                                            <li><a href="faq.html">Faq’s<i class="flaticon-next"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="btn-box">
                            <a href="index-2.html" class="theme-btn style-five">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="large-container clearfix">
                <figure class="logo-box"><a href="index.html"><img src="assets/images/small-logo-2.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="btn-box">
                        <a href="index-2.html" class="theme-btn style-five">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
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
    <section class="banner-style-two">
        <div class="pattern-layer" style="background-image: url({{asset('assets_web_profile/images/shape/shape-10.png')}});"></div>
        <div class="large-container">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h1>Best Artificial Intelligence Lab</h1>
                        <p>Naxly bring the power of data science and artificial intelligence to every business.</p>
                        <a href="index-2.html" class="theme-btn style-five"><i class="flaticon-next"></i>More Details</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img src="{{ asset('assets_web_profile/images/banner/banner-2-1.png') }}" alt=""></figure>
                        <figure class="image image-2 rotate-me"><img src="assets/images/icons/gear-4.png" alt=""></figure>
                        <figure class="image image-3 rotate-me"><img src="assets/images/icons/gear-5.png" alt=""></figure>
                        <figure class="image image-4 rotate-me"><img src="assets/images/icons/gear-5.png" alt=""></figure>
                        <figure class="image image-5 rotate-me"><img src="assets/images/icons/gear-6.png" alt=""></figure>
                        <div class="anim-icon">
                            <span class="icon icon-1"></span>
                            <span class="icon icon-2"></span>
                            <span class="icon icon-3"></span>
                            <span class="icon icon-4"></span>
                            <span class="icon icon-5"></span>
                            <span class="icon icon-6"></span>
                            <span class="icon icon-7"></span>
                            <span class="icon icon-8"></span>
                            <span class="icon icon-9"></span>
                            <span class="icon icon-10"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <div class="subscribe-us">
        <div class="large-container">
            <div class="subscribe-inner">
                <form action="index-2.html" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Enter Email Address..." required="">
                        <button type="submit"><i class="flaticon-next"></i>Subscribe Us</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- about-style-two -->
    <section class="about-style-two">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <div id="image_block_01">
                        <div class="image-box wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-12.png);"></div>
                            <figure class="image js-tilt"><img src="assets/images/resource/about-1.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div id="content_block_03">
                        <div class="content-box">
                            <div class="sec-title style-two text-left">
                                <p>About Company</p>
                                <h2>Mission is to bring the power of AI to every business</h2>
                                <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
                            </div>
                            <div class="text">
                                <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it but right to find fault with a man who chooses enjoy.</p>
                            </div>
                            <div class="lower-box">
                                <div class="icon-box">
                                    <div class="bg-box" style="background-image: url(assets/images/icons/icon-bg-3.png);"></div>
                                    <i class="flaticon-brain-2"></i>
                                </div>
                                <h5>Impressive Works Since 2010</h5>
                                <a href="about.html"><i class="flaticon-next"></i>More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- service-style-two -->
    <section class="service-style-two">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-13.png);"></div>
        <figure class="image-layer"><img src="assets/images/resource/illastration-2.png" alt=""></figure>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-9 col-lg-12 col-md-12 inner-column">
                    <div class="inner-content">
                        <div class="sec-title text-center light">
                            <p>Our Services</p>
                            <h2>Services we offer for you</h2>
                            <div class="decor" style="background-image: url(assets/images/icons/decor-4.png);"></div>
                        </div>
                        <div class="service-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="service-block-two">
                                <div class="inner-box">
                                    <div class="text-layer"><h2>Mac</h2></div>
                                    <div class="icon-box"><i class="flaticon-brain-3"></i></div>
                                    <h4><a href="service-details.html">Machine Learning</a></h4>
                                    <p>Simple & easy distinguish in when our power.</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-next"></i>Read More</a></div>
                                </div>
                            </div>
                            <div class="service-block-two">
                                <div class="inner-box">
                                    <div class="text-layer"><h2>Deef</h2></div>
                                    <div class="icon-box"><i class="flaticon-model"></i></div>
                                    <h4><a href="service-details.html">Deep Learning</a></h4>
                                    <p>Therefore always hold these matters to secure.</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-next"></i>Read More</a></div>
                                </div>
                            </div>
                            <div class="service-block-two">
                                <div class="inner-box">
                                    <div class="text-layer"><h2>Rre</h2></div>
                                    <div class="icon-box"><i class="flaticon-cog"></i></div>
                                    <h4><a href="service-details.html">Predicitive Analysis</a></h4>
                                    <p>Trouble that bound ensue to equaly blame belongs.</p>
                                    <div class="link"><a href="service-details.html"><i class="flaticon-next"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- case-style-two -->
    <section class="case-style-two">
        <div class="auto-container">
            <div class="top-inner clearfix">
                <div class="sec-title style-two text-left pull-left">
                    <p>Case Studies</p>
                    <h2>Latest from our projects</h2>
                    <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
                </div>
                <div class="btn-box pull-right">
                    <a href="project-details.html" class="theme-btn style-five"><i class="flaticon-next"></i>All Projects</a>
                </div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none">
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-1.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-1.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Banking & Finance</p>
                                <h4><a href="project-details.html">Invoice data capture</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-2.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-2.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Entertainment</p>
                                <h4><a href="project-details.html">Automate feedback analysis</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-3.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Healthcare</p>
                                <h4><a href="project-details.html">Big data processing</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-1.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-1.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Banking & Finance</p>
                                <h4><a href="project-details.html">Invoice data capture</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-2.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-2.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Entertainment</p>
                                <h4><a href="project-details.html">Automate feedback analysis</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-3.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Healthcare</p>
                                <h4><a href="project-details.html">Big data processing</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-1.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-1.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Banking & Finance</p>
                                <h4><a href="project-details.html">Invoice data capture</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-2.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-2.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Entertainment</p>
                                <h4><a href="project-details.html">Automate feedback analysis</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="case-block-two">
                    <div class="inner-box">
                        <figure class="image-box">
                            <img src="assets/images/gallery/gallery-3.jpg" alt="">
                            <div class="client-box">
                                <span>Neuro Jump</span>
                                <div class="client-logo"><img src="assets/images/icons/icon-3.png" alt=""></div>
                            </div>
                            <div class="link"><a href="project-details.html"><i class="flaticon-hyperlink"></i></a></div>
                            <div class="overlay-layer"></div>
                        </figure>
                        <div class="lower-content">
                            <div class="box">
                                <div class="icon-box"><i class="flaticon-vision"></i></div>
                                <p>Healthcare</p>
                                <h4><a href="project-details.html">Big data processing</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- case-style-two end -->


    <!-- process-style-two -->
    <section class="process-style-two" style="background-image: url(assets/images/background/process-bg-1.jpg);">
        <div class="auto-container">
            <div class="sec-title text-center style-two">
                <p>Our Work Process</p>
                <h2>Simple & clean work process</h2>
                <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
            </div>
            <div class="inner-content">
                <div class="line" style="background-image: url(assets/images/icons/line-1.png);"></div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-two">
                            <div class="inner-box">
                                <div class="arrow-box" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                <div class="icon-box">
                                    <div class="border-line" style="background-image: url(assets/images/icons/border-1.png);"></div>
                                    <i class="flaticon-big-data"></i>
                                </div>
                                <div class="count-box wow zoomIn animated" data-wow-delay="00ms" data-wow-duration="1500ms"><span>01</span></div>
                                <div class="content-box wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h4><a href="index-2.html">Frame the Problem</a></h4>
                                    <p>To take a trivial example, which idea of ever undertakes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-two">
                            <div class="inner-box">
                                <div class="arrow-box" style="background-image: url(assets/images/icons/arrow-1.png);"></div>
                                <div class="icon-box">
                                    <div class="border-line" style="background-image: url(assets/images/icons/border-1.png);"></div>
                                    <i class="flaticon-ui"></i>
                                </div>
                                <div class="count-box wow zoomIn animated" data-wow-delay="200ms" data-wow-duration="1500ms"><span>02</span></div>
                                <div class="content-box wow slideInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <h4><a href="index-2.html">Collect the Data</a></h4>
                                    <p>Best every pleasure is too welcomed every pain avoided.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 work-block">
                        <div class="work-block-two">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <div class="border-line" style="background-image: url(assets/images/icons/border-1.png);"></div>
                                    <i class="flaticon-brain"></i>
                                </div>
                                <div class="count-box wow zoomIn animated" data-wow-delay="400ms" data-wow-duration="1500ms"><span>03</span></div>
                                <div class="content-box wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <h4><a href="index-2.html">Process the Data</a></h4>
                                    <p>Have to be repudiated annoyances accepted the wise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn wow slideInUp" data-wow-delay="400ms" data-wow-duration="1500ms"><a href="index-2.html" class="theme-btn style-five"><i class="flaticon-next"></i>Get Started</a></div>
            </div>
        </div>
    </section>
    <!-- process-style-two end -->


    <!-- chooseus-section -->
    <section class="chooseus-section">
        <div class="auto-container">
            <div class="sec-title text-center style-two">
                <p>Why Choose Us</p>
                <h2>Reason for people choose us</h2>
                <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_04">
                        <div class="content-box">
                            <div class="single-item">
                                <div class="icon-box">
                                    <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-4.png);"></div>
                                    <i class="flaticon-global"></i>
                                </div>
                                <div class="box">
                                    <h4>Global Experience</h4>
                                    <p>Nor again is there anyone who loves or pursues pain of itself, because circumstances.</p>
                                    <a href="index-2.html"><i class="fas fa-arrow-right"></i>More Details</a>
                                </div>
                            </div>
                            <div class="single-item text-right">
                                <div class="icon-box">
                                    <div class="bg-layer" style="background-image: url(assets/images/icons/icon-bg-4.png);"></div>
                                    <i class="flaticon-analysis"></i>
                                </div>
                                <div class="box">
                                    <h4>Value for Results</h4>
                                    <p>Except obtain some advantages from ithas any to find fault with a consequences.</p>
                                    <a href="index-2.html">More Details<i class="fas fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                    <div id="video_block_01">
                        <div class="video-inner wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(assets/images/background/video-2.jpg);">
                            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-14.png);"></div>
                            <div class="video-btn">
                                <div class="btn-bg rotate-me" style="background-image: url(assets/images/icons/icon-bg-5.png);"></div>
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption=""><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two">
        <div class="title-inner bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-15.png);"></div>
            <div class="auto-container">
                <div class="sec-title text-left light">
                    <p>Testimonials</p>
                    <h2>Words from our clients</h2>
                    <div class="decor" style="background-image: url(assets/images/icons/decor-4.png);"></div>
                </div>
            </div>
        </div>
        <div class="lower-content">
            <div class="auto-container">
                <div class="inner-content">
                    <div class="testimonial-carousel-2 owl-carousel owl-theme owl-dots-none nav-style-one">
                        <div class="testimonial-content">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box" style="background-image: url(assets/images/icons/icon-4.png);"></div>
                                    <div class="text">
                                        <p>As a growing company, we found in Naxly expertise in data science invaluble In almost two years of cooperation, they’ve helped us.</p>
                                    </div>
                                    <div class="author-info">
                                        <h4>Dedrew Kowzel</h4>
                                        <span class="designation">CEO & Founder - Soft Solution</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box" style="background-image: url(assets/images/icons/icon-4.png);"></div>
                                    <div class="text">
                                        <p>As a growing company, we found in Naxly expertise in data science invaluble In almost two years of cooperation, they’ve helped us.</p>
                                    </div>
                                    <div class="author-info">
                                        <h4>Donal Archar</h4>
                                        <span class="designation">CEO & Founder - Soft Solution</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box" style="background-image: url(assets/images/icons/icon-4.png);"></div>
                                    <div class="text">
                                        <p>As a growing company, we found in Naxly expertise in data science invaluble In almost two years of cooperation, they’ve helped us.</p>
                                    </div>
                                    <div class="author-info">
                                        <h4>Jams Shan</h4>
                                        <span class="designation">CEO & Founder - Soft Solution</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->


    <!-- news-section -->
    <section class="news-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center style-two mb-60">
                <p>News & Updates</p>
                <h2>Latest thinking in AI and our<br />company news</h2>
                <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/news/news-1.jpg" alt="">
                                <a href="assets/images/news/news-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="file-box"><i class="far fa-folder-open"></i><p>Data Engineering</p></div>
                                <div class="title-box">
                                    <div class="post-date"><p>05</p><span>Jan</span></div>
                                    <h4><a href="blog-details.html">Naxly Named as a Global Leader in Big Data</a></h4>
                                </div>
                                <div class="link"><a href="blog-details.html"><i class="flaticon-next"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/news/news-4.jpg" alt="">
                                <a href="assets/images/news/news-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="file-box"><i class="far fa-folder-open"></i><p>ML Consulting</p></div>
                                <div class="title-box">
                                    <div class="post-date"><p>01</p><span>Jan</span></div>
                                    <h4><a href="blog-details.html">The Current State of Artificial Intelligence Infographic.</a></h4>
                                </div>
                                <div class="link"><a href="blog-details.html"><i class="flaticon-next"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="assets/images/news/news-5.jpg" alt="">
                                <a href="assets/images/news/news-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom"></i></a>
                            </figure>
                            <div class="lower-content">
                                <div class="file-box"><i class="far fa-folder-open"></i><p>Data Strategy</p></div>
                                <div class="title-box">
                                    <div class="post-date"><p>25</p><span>Dec</span></div>
                                    <h4><a href="blog-details.html">Naxly as the Winners in Global Agency Awards</a></h4>
                                </div>
                                <div class="link"><a href="blog-details.html"><i class="flaticon-next"></i>More Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-section end -->


    <!-- clients-style-two -->
    <section class="clients-style-two bg-color-1">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-16.png);"></div>
            <div class="pattern-2 wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms" style="background-image: url(assets/images/shape/shape-17.png);"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title text-center style-two mb-70">
                <p>Clients</p>
                <h2>Latest thinking in AI and our</h2>
                <div class="decor" style="background-image: url(assets/images/icons/decor-1.png);"></div>
            </div>
            <div class="logo-inner">
                <ul class="logo-box logo-box-one clearfix">
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-6.png" alt=""></a></figure></li>
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-7.png" alt=""></a></figure></li>
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-8.png" alt=""></a></figure></li>
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-9.png" alt=""></a></figure></li>
                </ul>
                <ul class="logo-box logo-box-two clearfix">
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-10.png" alt=""></a></figure></li>
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-11.png" alt=""></a></figure></li>
                    <li><figure class="image-box"><a href="index.html"><img src="assets/images/clients/clients-logo-12.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- clients-style-two end -->


    <!-- info-section -->
    <section class="info-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="info-inner">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-box">
                                <div class="hidden-icon"><i class="flaticon-pin"></i></div>
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-pin"></i></div>
                                    <h4>Location</h4>
                                    <span>Visit to explore the world</span>
                                </div>
                                <div class="text">
                                    <p>124, Queens walk 2nd cross<br />newyork 5241.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="info-box">
                                <div class="hidden-icon"><i class="flaticon-music"></i></div>
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-music"></i></div>
                                    <h4>Make a Call</h4>
                                    <span>Let’s talk with our experts</span>
                                </div>
                                <div class="text">
                                    <p><a href="tel:4455567890">+44 555 67 890</a></p>
                                    <p>Mon - Fri: 09.00 to 18.00</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                            <div class="info-box">
                                <div class="hidden-icon"><i class="flaticon-gmail"></i></div>
                                <div class="box">
                                    <div class="icon-box"><i class="flaticon-gmail"></i></div>
                                    <h4>Send a Mail</h4>
                                    <span>Dont’s hesitate to mail</span>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:career@example.com">career@example.com</a></p>
                                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- info-section end -->


    <!-- footer-style-two -->
    <footer class="footer-style-two bg-color-3">
        <div class="auto-container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Company</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <ul class="links clearfix">
                                                <li><a href="index.html">About Us</a></li>
                                                <li><a href="index.html">Projects</a></li>
                                                <li><a href="index.html">Services</a></li>
                                                <li><a href="index.html">Faq’s</a></li>
                                                <li><a href="index.html">Updates</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <ul class="links clearfix">
                                                <li><a href="index.html">Naxly</a></li>
                                                <li><a href="index.html">Data Science</a></li>
                                                <li><a href="index.html">Artificial Intelligence</a></li>
                                                <li><a href="index.html">Machine Learning</a></li>
                                                <li><a href="index.html">Get In Touch</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget post-widget">
                                <div class="widget-title">
                                    <h3>Trending Post</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="post">
                                        <div class="post-date"><p>05</p><span>Jan</span></div>
                                        <div class="file-box"><i class="far fa-folder-open"></i><p>Data Engineering</p></div>
                                        <h5><a href="blog-details.html">Naxly Named as a Global Leader in Big Data</a></h5>
                                    </div>
                                    <div class="post">
                                        <div class="post-date"><p>30</p><span>Dec</span></div>
                                        <div class="file-box"><i class="far fa-folder-open"></i><p>Data Strategy</p></div>
                                        <h5><a href="blog-details.html">Naxly as the Winners in Global Agency Awards</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget gallery-widget">
                                <div class="widget-title">
                                    <h3>Latest Works</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-1.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-2.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-3.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-4.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-5.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-6.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-7.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image-box">
                                                <img src="assets/images/resource/footer-8.jpg" alt="">
                                                <a href="project-details.html"><i class="flaticon-hyperlink"></i></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="left-column pull-left">
                    <div class="copyright">
                        <p>Copyright &copy; <a href="index.html">Naxly</a>, All Rights Reserved.</p>
                    </div>
                    <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo-2.png" alt=""></a></figure>
                </div>
                <div class="right-column pull-right">
                    <ul class="footer-nav">
                        <li><a href="index.html">Privacy Policy</a></li>
                        <li><a href="index.html">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-style-two end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>


<!-- Script -->
@include('layouts.web_profile.partials.__script')
<!-- End Script -->

</body><!-- End of .page_wrapper -->
</html>