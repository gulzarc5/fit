@extends('website.template.master')
@section('title', 'Coaching')
@section('metatags')
    <meta name="author" content="pixelstrap" />
    <meta name="description" content="Reno | Education HTML Templates from pixelstrap">
    <meta name="keywords" content="Reno | Education HTML Templates from pixelstrap">
@endsection

@section('content')      
    <!--  Slider_start  -->
    <div class="home-slider education home-full">
        <div class="slide_1 owl-carousel owl-theme">
            <div class="home_cun_slider_1">
                <img src="assets/images/slider/slide1.jpg" alt="" class="bg-img" >
            </div>
            <div class="home_cun_slider_1">
                <img src="assets/images/slider/slide2.jpg" alt="" class="bg-img" >
            </div>
            <div class="home_cun_slider_1">
                <img src="assets/images/slider/slide3.jpg" alt="" class="bg-img" >
            </div>
        </div>
    </div>
    <!--  Slider_End  -->

    <!-- About Us End -->

    <div class="container">

        <div class="row center">
            <div class="span12">
                <h2 class="short">We are the <strong class="inverted">BEST</strong> choice for Freshers.</h2>
            <p> We welcome you to the next level industrial training program in the NorthEast. FreshersIT is the place where you will be trained to meet the industrial standards of programming. We will push you to lead the required market knowledge and will ensure that you are ready for the IT industry to<br> work and lead.</p>
            </div>
        </div>
    </div>
    <!-- Our Course Start -->
    <section id="service" class="service cmn_bg cmn_bg-4">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container our_service">
            <div class="row">
                <div class="col-12">
                    <div class="con_title">
                        <h2>OUR COURSE</h2>
                        <h6><span>career oriented courses</span></h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service_our">
                        <figure class="snip_con">
                            <a class="course-link" href="{{ROUTE('website.web_design')}}">
                                <img src="assets/images/education/services/1.jpg" class="img-fluid" alt="serviceimage">
                            </a>
                            <figcaption>
                                <div>
                                    <p class="pretext"><i></i>Intro To Web Design</p>
                                    <p class="pretext"><i></i>HTML & Photoshop</p>
                                    <p class="pretext"><i></i>CSS & Bootstrap 4</p>
                                    <p class="pretext"><i></i>Javascript & Jquery</p>
                                    <p class="pretext"><i></i>Live Project</p>
                                    <a class="c-link" href="{{ROUTE('website.web_design')}}">Read More</a>
                                </div>
                            </figcaption>
                        </figure>                 
                        <div class="service_content">
                            <a class="course-link" href="{{ROUTE('website.web_design')}}">
                                <h5>Web Design</h5>
                                <span class="d-block home-opening-courses-box-title-border"></span>
                                <p class="mb-1 t-red roboto f-500 price">₹7500<span class="old-price">₹10,000</span></p>
                                <p>35 Students Enrolled </p>
                                <p class="mb-0 d-flex t-yellow roboto f-600"><b style="color:red;margin-right: 2px;">* </b>Industrial Level<span class="new">2 months</span></p>
                            </a>                            
                            <a href="{{route('web.apply_form',['id'=>encrypt(1)])}}"><h6 class="index-apply">Apply Now</h6></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service_our">
                        <figure class="snip_con">
                            <a class="course-link" href="{{route('website.php_train')}}">
                                <img src="assets/images/education/services/2.jpg" class="img-fluid " alt="serviceimage">
                            </a>
                            <figcaption>
                                <div>
                                    <p class="pretext"><i></i>Basic of Php </p>
                                    <p class="pretext"><i></i>Login System</p>
                                    <p class="pretext"><i></i>Design a dynamic site</p>
                                    <p class="pretext"><i></i>Logic based problem </p>
                                    <a class="c-link" href="{{route('website.php_train')}}">Read More</a>
                                </div>
                            </figcaption>
                        </figure>                    
                        <div class="service_content">
                            <a class="course-link" href="{{route('website.php_train')}}">
                                <h5>Web Development</h5>
                                <span class="d-block home-opening-courses-box-title-border"></span>
                                <p class="mb-1 t-red roboto f-500 price">₹12,000<span class="old-price">₹15,000</span></p>
                                <p>35 Students Enrolled </p>
                                <p class="mb-0 d-flex t-yellow roboto f-600"><b style="color:red;margin-right: 2px;">* </b>Industrial Level<span class="new">3 months</span></p>
                            </a>                            
                            <a href="{{route('web.apply_form',['id'=>encrypt(2)])}}"><h6 class="index-apply">Apply Now</h6></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service_our">
                        <figure class="snip_con">
                            <a class="course-link" href="{{route('website.andriod')}}">
                                <img src="assets/images/education/services/3.jpg" class="img-fluid " alt="serviceimage">
                            </a> 
                            <figcaption>
                                <div>
                                    <p class="pretext"><i></i>Basic of Php </p>
                                    <p class="pretext"><i></i>Login System</p>
                                    <p class="pretext"><i></i>Design a dynamic site</p>
                                    <p class="pretext"><i></i>Logic based problem </p>
                                    <a class="c-link" href="{{route('website.andriod')}}">Read More</a>
                                </div>
                            </figcaption>  
                        </figure>                    
                        <div class="service_content">
                            <a class="course-link" href="{{route('website.andriod')}}">
                                <h5>Android Development</h5>
                                <span class="d-block home-opening-courses-box-title-border"></span>
                                <p class="mb-1 t-red roboto f-500 price">₹12,500<span class="old-price">₹15,000</span></p>
                                <p>35 Students Enrolled </p>
                                <p class="mb-0 d-flex t-yellow roboto f-600"><b style="color:red;margin-right: 2px;">* </b>Industrial Level<span class="new">3 months</span></p>
                            </a>                            
                            <a href="{{route('web.apply_form',['id'=>encrypt(3)])}}"><h6 class="index-apply">Apply Now</h6></a>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Course End -->

    <!-- Banner Start -->
    <div class="col-xl-12 col-12 px-0 home-about-instaily-back" style="background: url(assets/images/Group162.jpg) !important;">
        <div class="container">
            <div class="col-xl-12 col-12 px-0 d-flex flex-wrap">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 pl-0">
                    <p class="t-white oswald f-600 f-43 home-about-instaily-heading">Why Choose Us?</p>
                    <p class="t-white roboto f-400">We are IT experts ready to provide you with real-world programming knowledge and share our industrial experience with you. After course completion, you will be ready to lead<br> the domain market.</p>
                    <p class="t-white roboto f-400">Following Are Some Benefits Of Our Courses.</p>
                    <div class="col-xl-10 col-10 px-0 d-flex flex-wrap home-about-instaily-list">
                        <ul class="col-md-6 col-sm-6 col-xs-12 col-xl-6 col-lg-6 col-12 pt-2 px-0">
                            <li class="d-flex justify-content-between"><span><i class="fa fa-check mr-3" aria-hidden="true"></i></span><span class="home-about-instaily-list-text">Designed to provide both Theoritical and Practical Knowledge on the go.</span></li>
                            <li class="d-flex justify-content-between"><span><i class="fa fa-check mr-3" aria-hidden="true"></i></span><span class="home-about-instaily-list-text">Course structured to provide comfort and enjoyment of learning</span></li>
                            <li class="d-flex justify-content-between">
                                <span><i class="fa fa-check mr-3" aria-hidden="true"></i></span>
                                <span class="home-about-instaily-list-text">Advance Technology knowledge with training.</span>
                            </li>
                        </ul>
                        <ul class="col-md-6 col-sm-6 col-xs-12 col-xl-6 col-lg-6 col-12 pt-2 px-0">
                            <li class="d-flex justify-content-between"><span><i class="fa fa-check mr-3" aria-hidden="true"></i></span><span class="home-about-instaily-list-text">Designed to provide Industrial level knowledge to all the Students.</span></li>
                            <li class="d-flex justify-content-between"><span><i class="fa fa-check mr-3" aria-hidden="true"></i></span><span class="home-about-instaily-list-text">IT professionals from all over India wil teach you.</span></li>
                            <li class="d-flex justify-content-between">
                                <span><i class="fa fa-check mr-3" aria-hidden="true"></i></span>
                                <span class="home-about-instaily-list-text">Join if you like. Free 3-Days training.</span>
                            </li>
                        </ul>
                    </div>
                    <p class="t-white roboto f-400">For More Details Contact Us Now <a href="#" class="t-white f-500"> +91-91017-52106</a> </p>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 pr-0 home-career-guidance-form-box home-career-guidance-new">
                    <div class="card">
                        <form id="career_form_home_form">
                            <p class="text-center t-yellow roboto f-600 career-guidance-main-text">Career Guidance</p>
                            <!-- Name -->
                            <div class="col-lg-12 col-12 p-0 career_message_home_form" style="display: none;">
                                <div class="alert alert-success career_message_success_home_form" role="alert"></div>
                                <div class="alert alert-danger career_message_error_home_form" role="alert"></div>
                            </div>

                            <div class="md-form mt-3 home-custom-form">
                                <input type="text" class="form-control" id="home-form-name" placeholder="Name">
                                <span class="roboto f-400 f-14 form-error name-class_home_form" style="display: none;">Please enter your name</span>
                            </div>                                  
                            <!-- E-mail -->
                            <div class="md-form home-custom-form">
                                <input type="email" class="form-control" id="home-form-email" placeholder="Email">
                                <span class="roboto f-400 f-14 form-error email-class_home_form" style="display: none;">Please enter a valid email</span>
                            </div>
                            <!-- mobile no. -->
                            <div class="md-form home-custom-form">
                                <input type="text" class="form-control" id="home-form-number" placeholder="Mobile No.">
                                <span class="roboto f-400 f-14 form-error no-class_home_form" style="display: none;">Please enter a valid No.</span>
                            </div>
                            <!--Message-->
                            <div class="md-form home-custom-form">
                                <textarea class="form-control md-textarea" id="home-form-message" rows="3" placeholder="Message"></textarea>
                                <span class="roboto f-400 f-14 form-error msg-class_home_form" style="display: none;">Please type your message</span>
                            </div>
                            <div class="md-form mb-0 home-custom-form">
                                <button type="button" class="btn form-control back-yellow roboto f-600 career-guidence-submit-btn join-modal-career-guidance-btn_home_form waves-effect waves-light" onclick="submitHomePageForm(home_page_captcha)">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Brand Start -->
    <section class="brand_sec cmn_bg cmn_bg-4">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand_slide owl-carousel owl-theme">
                        <div class="brand_1">
                            <img src="assets/images/brand/1.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/2.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/3.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/4.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/5.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/6.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/7.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/8.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/9.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/10.jpg" alt="">
                        </div>
                        <div class="brand_1">
                            <img src="assets/images/brand/11.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Brand End -->
@endsection    