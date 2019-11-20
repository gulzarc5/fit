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

    <!-- Rating Start -->
    {{-- <section id="rating" class="rating_sec home_rate_2">
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
    </section> --}}
    <!-- Rating End -->
@endsection  
