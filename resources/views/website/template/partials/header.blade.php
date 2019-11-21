<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="pixelstrap" />
    <meta name="description" content="Reno | Education HTML Templates from pixelstrap">
    <meta name="keywords" content="Reno | Education HTML Templates from pixelstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Site Title -->
    <title>Coaching</title>

    <!-- Fav icon -->
    <link rel="shortcut icon" href="{{asset('assets/images/education/Favicon.png')}}')}}">

    <!-- Font Family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" >

    <!-- Themify icon -->
    <link rel="stylesheet" href="{{asset('assets/css/themify.css')}}">

    <!-- Animation CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">

    <!-- Flat icon icon -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

    <!-- Owl carousel css-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- zoom css-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- Style css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/color7.css')}}" media="screen" id="color">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

</head>

<body>

  <!-- loader start -->
  <div class="loader-wrapper">
      <div class="loader">
          <div></div>
      </div>
  </div>
  <!-- loader end -->

  <header class="header">
    <!-- Top-Section -->
    <div class="top-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-content">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +91-91017-52106 </li><li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@freshersit.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-social">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/infowebinfotech/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://wa.me/+91-7086030335"><i class="fa fa-whatsapp"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/webinfotechghy/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a></li>
                            <li class="my-account d-none"><a href="#">My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End-Top-Section-->
    <!-- Nav Start -->
    <nav class="navbar education navbar-expand-lg navbar-light theme-nav bg-white" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="Home"><img src="{{asset('assets/images/logo/logo.png')}}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse default-nav" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" id="mymenu">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.Home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.about-us')}}">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="{{route('website.web_design')}}">Web Design</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('website.php_train')}}">Web Development</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('website.andriod')}}">Android Development</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('website.contact-us')}}">Contact us</a>
                </li>
                <li class="nav-item external-link">
                    <a class="nav-link" target="_blank" href="https://www.webinfotech.net.in/">Webinfotech</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Nav end -->
</header>