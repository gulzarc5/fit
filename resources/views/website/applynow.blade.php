@extends('website.template.master')

@section('content')
    <!-- Breadcrumb Start -->
    <div class="bread_crumb">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sec_low">
                    <div class="functionalities">
                        <ul id="breadcrumb" class="breadcrumb">
                            <li><a title="Home" href="Home"><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</strong></a></li>
                            <li class="active"><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> APPLY NOW</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-title">
                        <h2>APPLY NOW</h2>
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
                        <div class="quote_form"><br>
                            <h3>Enter Your Basic Information</h3><br>
                            <form >
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Email :</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Enter Your Email" required="">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Phone :</label>
                                        <input type="number" class="form-control" placeholder="Enter Your Phone" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleTextarea">Highest Qualification :</label>
                                        <textarea class="form-control msg_coment" id="exampleTextarea" rows="2" placeholder="Qualification" required=""></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleTextarea">Full Address :</label>
                                        <textarea class="form-control msg_coment" id="exampleTextarea" rows="2" placeholder="Address" required=""></textarea>
                                    </div>
                                </div>
                                <a class="quote_btn theme_btn" href="{{route('website.confirm')}}" type="Submit">
                                    Submit
                                    <span class="theme_btn_eff"></span>
                                </a>
                            </form>
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