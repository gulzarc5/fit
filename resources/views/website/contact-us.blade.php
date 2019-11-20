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
                            <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> CONTACT US</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title">
                        <h2>CONTACT US</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->

    <!-- Contact-us Start -->
    <section class="contact-section cmn_bg">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <!-- leave comment sectopn starts-->
        <div class="comment_form contact_form contect_f">
            <div class="text-xl-left">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 contact_text">
                            <div class="angle angle-left"></div>
                            <h3 class="title">Contact Us</h3>
                            <p>If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit Intense in our comfortable office.</p>
                            <div class="contect_info">
                                <div class="contect-title">
                                    <h3 class="title">Information</h3>
                                </div>
                                <div class="contant-text">
                                    <ul>
                                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>Nupur Niwas, Purbanchal Path, Downtown, Dispur,
                                        Guwahati - 781022</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: +91-9706868355 / +91-7086030335</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>Email Us: webinfotech014@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- leave comment sectopn starts-->
                        <div class="col-lg-8 center">
                            <div class="angle angle-right"></div>
                            <div class="quote_2 comment_form_sec">
                                <div class="container bg-transparent">
                                    <div class="row">
                                        <div class="col-12 quote_form">
                                            <h3 class="page-header-comment mb-4">Leave you comment :</h3>
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>Name :</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Name" required="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Email :</label>
                                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required="">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleTextarea">Message :</label>
                                                        <textarea class="form-control msg_coment" id="exampleTextarea" rows="3" placeholder="Leave a Comment" required=""></textarea>
                                                    </div>
                                                </div>
                                                <a class="quote_btn theme_btn" href="#">
                                                    Send Your Message
                                                    <span class="theme_btn_eff"></span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- leave comment section end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- leave comment section end-->
    </section>
    <!-- Contact-us End -->
@endsection 
