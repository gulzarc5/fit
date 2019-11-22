<!DOCTYPE html>
<html lang="en">
	<!-- Head -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
		
		@yield('metatags')
	    

	    <!-- Site Title -->
	    <title>@yield('title', 'FreshersIT | Best of Web Designing, Web Development, Andriod Development')</title>

	    <!-- Fav icon -->
	    <link rel="shortcut icon" href="{{asset('assets/images/education/Favicon.png')}}">

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
	<!-- Header -->
	<body>
		@include('website.template.partials.header')
		@yield('content')
		@include('website.template.partials.footer')
		@yield('script')
	</body>
</html>