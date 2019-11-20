@extends('website.template.master')

@section('content')    
    <!-- Breadcrumb Start -->
    <div class="bread_crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb">
                            <li><a title="Home" href="./"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Us Start -->
    <section id="about_us" class="about_us_sec about_page cmn_bg" >
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container about_sec about_sec_4">
            <div class="row">
                <div class="col-12">
                    <div class="con_title">
                        <h2>about us</h2>
                        <h6><span>Know Us More</span></h6>
                    </div>
                </div>
                <div class="col-sm-8 mx-auto">
                    <div>
                        <img src="assets/images/about-us.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <div class="about_content">
                            <h4 class="text-center">Learn from industrial IT experts</h4>
                            <p>We are different from other IT coaching providers. The education in coachings and the technological knowledge required in industries are different. Our trainers are IT experts from IT industries with working industrial IT Knowledge who will teach you everything depending on the industrial scenario and help you to get ready for industry-level requirements.
                                <br>Learning theory and having practical knowledge is two different things. Theoritical knowledge with practical knowledge is of no use. We in FreshersNE, give equal importance on both theory and practical and ready to train you for leading the IT market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us End -->

    <!-- Our Project Start -->
    <section class="project_home_four zoom-gallery">
        <div class="container our_project_4">
            <div class="row">
                <div class="col-12">
                    <div class="con_title con_title_4">
                        <h2>OUR project</h2>
                        <h6><span>WE ARE EXPERT IN</span></h6>
                    </div>
                </div>
                <div class="col-12">
                    <div id="formButton" class="mobile-btn">Filter<span class="according-menu"></span></div>
                    <div class="center_tag" id="form1">
                        <div class="btn_center">
                            <button class="filter-button project_button active" data-filter="all">All</button>
                            <button class="filter-button project_button" data-filter="buildings">BUILDINGS</button>
                            <button class="filter-button project_button" data-filter="family">FAMILY</button>
                            <button class="filter-button project_button" data-filter="housegreen">HOUSEGREEN</button>
                            <button class="filter-button project_button" data-filter="building">BUILDING</button>
                            <button class="filter-button project_button" data-filter="interior">INTERIOR</button>
                            <button class="filter-button project_button" data-filter="Office">OFFICE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="filter buildings col-lg-4 col-sm-6">
                    <figure class="snip_con">
                        <img src="assets/images/about/1.jpg" class="img-fluid " alt="">
                        <figcaption>
                            <div>
                                <div class="link_icon">
                                    <a href="single-portfolio.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <a href="assets/images/about/1.jpg" class="zoom_gallery"> <img src="assets/images/about/1.jpg" alt="" class="d-none img-fluid"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                                <h5>Palm Bay, Florida</h5>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="filter buildings col-lg-4 col-sm-6">
                    <figure class="snip_con">
                        <img src="assets/images/about/2.jpg" alt="" class="img-fluid ">
                        <figcaption>
                            <div>
                                <div class="link_icon">
                                    <a href="single-portfolio.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <a href="assets/images/about/2.jpg" class="zoom_gallery"> <img src="assets/images/about/2.jpg" alt="" class="d-none img-fluid"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                                <h5>Palm Bay, Florida</h5>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="filter family col-lg-4 col-sm-6">
                    <figure class="snip_con">
                        <img src="assets/images/about/3.jpg" alt="" class="img-fluid ">
                        <figcaption>
                            <div>
                                <div class="link_icon">
                                    <a href="single-portfolio.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <a href="assets/images/about/3.jpg" class="zoom_gallery"> <img src="assets/images/about/3.jpg" alt="" class="d-none img-fluid"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                                <h5>Palm Bay, Florida</h5>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="filter building col-lg-4 col-sm-6">
                    <figure class="snip_con">
                        <img src="assets/images/about/4.jpg" alt="" class="img-fluid">
                        <figcaption>
                            <div>
                                <div class="link_icon">
                                    <a href="single-portfolio.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <a href="assets/images/about/4.jpg" class="zoom_gallery"> <img src="assets/images/about/4.jpg" alt="" class="d-none img-fluid"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                                <h5>Palm Bay, Florida</h5>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="filter Office col-lg-4 col-sm-6">
                    <figure class="snip_con">
                        <img src="assets/images/about/5.jpg" alt="" class="img-fluid ">
                        <figcaption>
                            <div>
                                <div class="link_icon">
                                    <a href="single-portfolio.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <a href="assets/images/about/5.jpg" class="zoom_gallery"> <img src="assets/images/about/5.jpg" alt="" class="d-none img-fluid"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                                <h5>Palm Bay, Florida</h5>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="filter interior col-lg-4 col-sm-6">
                    <figure class="snip_con">
                        <img src="assets/images/about/6.jpg" alt="" class="img-fluid ">
                        <figcaption>
                            <div>
                                <div class="link_icon">
                                    <a href="single-portfolio.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    <a href="assets/images/about/6.jpg" class="zoom_gallery"> <img src="assets/images/about/6.jpg" alt="" class="d-none img-fluid"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                                </div>
                                <h5>Palm Bay, Florida</h5>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Project End -->

    <!-- Testimonial Start -->
    <section class="testimonial home_4_testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <div class="con_title con_title_4">
                            <h2>TESTIMONIAL</h2>
                            <h6><span>our happy client</span></h6>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-12">-->
                <div class="testimonial_slide_4 owl-carousel owl-theme">
                    <div class="iteam" >
                        <div class="testimonial_sec">
                            <div>
                                <img src="assets/images/testimonial/1.png" alt="testimonialimage" >
                                <i class="fa fa-quote-left img_quote" aria-hidden="true"></i>
                                <p><span class="quote_left"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    <span class="quote_right"><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                                <h3>Ethen Mark</h3>
                                <h5>Director</h5>
                            </div>
                        </div>
                    </div>
                    <div class="iteam" >
                        <div class="testimonial_sec">
                            <div>
                                <img src="assets/images/testimonial/2.png" alt="testimonialimage" >
                                <i class="fa fa-quote-left img_quote" aria-hidden="true"></i>
                                <p><span class="quote_left"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    <span class="quote_right"><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                                <h3>Suzen Desoza</h3>
                                <h5>Director</h5>
                            </div>
                        </div>
                    </div>
                    <div class="iteam" >
                        <div class="testimonial_sec">
                            <div>
                                <img src="assets/images/testimonial/3.png" alt="testimonialimage" >
                                <i class="fa fa-quote-left img_quote" aria-hidden="true"></i>
                                <p><span class="quote_left"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    <span class="quote_right"><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
                                <h3>John Deo</h3>
                                <h5>Director</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--</div>-->
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Rating Start -->
    <section id="rating" class="rating_sec home_rate_2">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6">
                    <div class="rating_cls">
                        <div>
                            <img src="assets/images/construction/rate_icon/1.png" alt="">
                            <h2 class="counter">345</h2>
                            <h5>PROJECTS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="rating_cls">
                        <div>
                            <img src="assets/images/construction/rate_icon/2.png" alt="">
                            <h2 class="counter">1298</h2>
                            <h5>HAPPY CLIENTS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="rating_cls">
                        <div>
                            <img src="assets/images/construction/rate_icon/3.png" alt="">
                            <h2 class="counter">325</h2>
                            <h5>QUALIFIED STAFF</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="rating_cls">
                        <div>
                            <img src="assets/images/construction/rate_icon/4.png" alt="">
                            <h2 class="counter">3159</h2>
                            <h5>MACHINERIES</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rating End -->
@endsection  
