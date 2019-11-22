@extends('website.template.master')
@section('title', 'Coaching')
@section('metatags')
    <meta name="author" content="pixelstrap" />
    <meta name="description" content="Reno | Education HTML Templates from pixelstrap">
    <meta name="keywords" content="Reno | Education HTML Templates from pixelstrap">
@endsection

@section('content')
    <!-- blog Section starts-->
    <section class="cmn_bg blog_page receipt" style="border-top: 1px solid #eee;background-image: url(assets/images/Education.jpg);background-size: contain;">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
        <div class="container" style="padding: 0 30px 30px;">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <!-- Comment Sec End -->
                    <div class="quote_2 comment_form_sec bg-eeec">
                        <div class="quote_form" id="printable">
                            <div class="con-div"><img src="{{asset('assets/images/check.png')}}" style="width: 9%;"></div><br>
                            @if (isset($student) && !empty($student))
                                <p>Your Payment was succussful. Please print the receipt for further use.</p>
                                <div class="row m-o receipt-content">
                                    <div class="col-sm-5">
                                        <h5><strong>Student Id : </strong></h5>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>WEB-FIT-{{$student->id}}-2019</h5>
                                    </div>
                                    <div class="col-sm-5">
                                        <h5><strong>Transction Id : </strong></h5>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>{{$student->payment_id}}</h5>
                                    </div>
                                    <div class="col-sm-5">
                                        <h5><strong>Student Name : </strong></h5>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>{{$student->name}}</h5>
                                    </div>
                                    <div class="col-sm-5">
                                        <h5><strong>Course Applied  : </strong></h5>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>{{$student->c_name}}</h5>
                                    </div>
                                    <div class="col-sm-5">
                                        <h5><strong>Phone : </strong></h5>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>{{$student->mobile}}</h5>
                                    </div>
                                    <div class="col-sm-5">
                                        <h5><strong>Application Date : </strong></h5>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>{{$student->created_at}}</h5>
                                    </div>
                                </div>
                                <h3 style="margin-top: 10px"><strong>Documents Required</strong></h3>
                                <p class="pretext" style="margin: 0">Highest Qualification Certificate<b style="color: red">*</b></p>
                                <p class="pretext" style="margin: 0">Receipt copy<b style="color: red">*</b></p>
                                <p class="pretext" style="margin: 0">2 passport size photo<b style="color: red">*</b></p>
                                <p class="pretext" style="margin: 0">Address Proof<b style="color: red">*</b></p>
                                <div class="con-div"><button style="padding: 7px 23px;" class="index-apply" onclick="printDiv()">Print</button></div>
                            @else
                                <p style="color:red">Sorry !! Payment Failed</p>
                            @endif
                            
                        </div>
                    </div>
                    <!-- leave comment section end-->
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </section>
    <!-- blog Section End-->

    <!-- Contact-us End -->


@endsection

@section('script')
<script type="text/javascript">
    function printDiv() {
       var printContents = document.getElementById("printable").innerHTML;
       var originalContents = document.body.innerHTML;
  
       document.body.innerHTML = printContents;

  
       window.print();

       document.body.innerHTML = originalContents;
    }
  </script>
@endsection