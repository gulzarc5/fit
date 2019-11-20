@extends('website.template.master')

@section('content')
    <!-- Breadcrumb Start -->
    <div class="bread_crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb">
                            <li><a title="Home" href="Home"><strong>Home</strong></a></li>
                            <li class="active"><strong style="text-transform: uppercase;"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Confirm Password</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title">
                        <h2 style="text-transform: uppercase;">Confirm Password</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Start -->

    <!-- blog Section starts-->
    <section class="cmn_bg blog_page">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container blog-shadow" style="padding: 0 30px 30px;background: #eeec;">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Comment Sec End -->
                    <div class="quote_2 comment_form_sec">
                        <div class="quote_form con-content"><br>
                            <div class="con-div"><img src="assets/images/check.png"></div>
                            <p>Your application has been recevied. To confirm your enrollement for the course of <strong style="text-transform: uppercase;">web designing</strong></p>
                            <h3>Please pay an amount of rs. 500</h3>
                            <div class="content-body">
                                <p class="course-summery-text">A student has to pay an amount of ₹ 500 for enrollment of a course </p>
                                <p class="course-summery-text">This amount is refundable if a student doesn't continue with a course after trail classes</p>
                                <p class="course-summery-text">Duration of a trial class is 3 days, where a student will be given a overview of a course along with few basic knowledge and its application in corporate world.</p>
                            </div>
                            <div class="con-div"><a href="#" class="index-apply">Pay Online</a></div>
                        </div>
                    </div>
                    <!-- leave comment section end-->
                </div>
            </div>
        </div>
    </section>
    <!-- blog Section End-->

<!-- Contact-us End -->
@endsection