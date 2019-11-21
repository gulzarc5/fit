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
                            {{ Form::open(array('route' => 'web.apply', 'method' => 'post')) }}
                                @if (isset($id))
                                    <input type="hidden" name="course" value="{{encrypt($id)}}"/>
                                @endif
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name" value="{{old('name')}}">
                                        @if($errors->has('name'))
                                            <span role="alert" style="color:red">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Email :</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Enter Your Email" name="email" value="{{old('email')}}">
                                        @if($errors->has('email'))
                                            <span role="alert" style="color:red">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Phone :</label>
                                        <input type="number" class="form-control" placeholder="Enter Your Phone" name="mobile" value="{{old('mobile')}}">
                                        @if($errors->has('mobile'))
                                            <span role="alert" style="color:red">
                                                <strong>{{ $errors->first('mobile') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleTextarea">Highest Qualification :</label>
                                        <textarea class="form-control msg_coment" id="exampleTextarea" rows="2" placeholder="Qualification" name="qualification" value="{{old('qualification')}}"></textarea>
                                        @if($errors->has('qualification'))
                                            <span role="alert" style="color:red">
                                                <strong>{{ $errors->first('qualification') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleTextarea">Full Address :</label>
                                        <textarea class="form-control msg_coment" id="exampleTextarea" rows="2" placeholder="Address" name="address" value="{{old('address')}}"></textarea>
                                        @if($errors->has('address'))
                                            <span role="alert" style="color:red">
                                                <strong>{{ $errors->first('address') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="quote_btn theme_btn" type="Submit">
                                    Submit
                                    <span class="theme_btn_eff"></span>
                                </button>
                            {{ Form::close() }}
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