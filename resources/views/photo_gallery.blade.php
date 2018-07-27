<!DOCTYPE html>
<html lang="en">
	<head><style>
        .contact_area{
            height:500px!important;
        }
        *{
            font-family: Arial, Helvetica, sans-serif !important;
        }
        header .navtop{
            padding:9px !important;
        }
    </style>
		<!-- meta tag start -->
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- meta tag start -->

		<title>unik edu</title>
		
		<!-- favicons -->
	    <link rel="shortcut icon" href="">
	    				<link rel="stylesheet" href="bootstrap.min.css">

		<!-- font-awesome css file -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- animate css file -->
		<link rel="stylesheet" href="{{ asset('front_view/animate.css') }}">

		<!-- camera slider css file -->
		<link rel="stylesheet" href="{{ asset('front_view/camera.css') }}">

		<!-- slick.css file -->
		<link rel="stylesheet" href="{{ asset('front_view/slick.css') }}">

		<!-- slick-theme.css file -->
		<link rel="stylesheet" href="{{ asset('front_view/slick-theme.css') }}">

		<!-- fancybox css file -->
		<link rel="stylesheet" href="{{ asset('front_view/jquery.fancybox.css') }}">

		<!-- Default stylesheet -->
		<link rel="stylesheet" href="{{ asset('front_view/style.css') }}">

		<!-- responsive stylesheet -->
		<link rel="stylesheet" href="{{ asset('front_view/responsive.css') }}">
		
	    
		<!-- Bootstrap css file -->

		
	</head>
	<body>

		<!-- header_area start -->
		<header id="home">
			<!-- navtop area start -->
			<div class="navtop" style="background-color:#0099FF">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
							<div class="left_box">
								<span style="color:#fff; margin-right:20px"><i class="fa fa-book" aria-hidden="true"></i> Contact now : +81 334 54334 343</span>
								<span style="color:#fff"><i class="fa fa-envelope" aria-hidden="true"></i> Email : a@gmail.com</span>
							</div>
						</div>
						<div class="col-md6 col-sm-6 col-xs-12">

							<div class="social-link">
								<ul>
									<li><a href="#" style="color:#fff"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
									<li ><a href="#" style="color:#fff"><i class="fa fa-twitter" aria-hidden="true"></i> google +</a></li>
									<li><a href="#" style="color:#fff"><i class="fa fa-youtube" aria-hidden="true"></i> youtube </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /navtop area end -->
			
			<!-- navbar start -->
			<nav class="navbar" id="myNavbar">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a href="index.html"><img src="{{ asset('public/logo.jpg') }}" alt="Brand Logo"  style="height:60px; width:80px;padding:0px"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active smoth-scroll"><a href="{{ url('/') }}#home">Home</a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#about" class="animte_nav">About</a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#service" class="animte_nav">Service</a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#team" class="animte_nav">Team</a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#gallery" class="animte_nav">Gallery</a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#event" class="animte_nav">Event</a></li>
							<li class="smoth-scroll"><a href="{{ url('/login') }}" class="animte_nav">Login</a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#contact" class="animte_nav">Contact</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- navbar end -->

		</header>
		<!-- /header_area End-->

		<!-- blog_area start -->
		<section class="blog_area section_padding" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>All Photo</h3>
						</div>
						<!-- section_title end -->
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/1.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/2.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/3.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/4.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/5.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/6.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/7.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/8.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/9.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/10.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/11.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/12.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/13.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/14.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/15.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/16.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/17.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/18.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/19.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/20.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/21.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/22.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/23.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/24.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/25.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/26.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/27.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/28.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/29.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/30.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/31.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/32.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/33.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/34.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/35.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/36.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/37.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/38.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/39.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/40.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/41.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/42.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/43.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/44.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/45.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/46.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/47.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/48.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/49.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/50.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/51.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/52.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/53.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/54.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/55.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/56.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/57.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/58.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/59.jpg') }}" style="margin:10x">
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<img src="{{ asset('public/60.jpg') }}" style="margin:10x">
					</div>
					
        

				</div>
			</div>

		</section>
		<!-- blog_area End -->


		<div class="copy_right ptb30">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copy_right_content">
							<p>© 2017. All Rights Reserved  By <a href="#">Unik Education</a> <br>
								<span style="font-size:8px">Develop by <a href="https://www.linkedin.com/in/armanhakimsagar/">Arman Hakim Sagar</span></p>
						</a></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copy_right_nav">
							<ul>
								<li class="active smoth-scroll"><a href="{{ url('/') }}#home">Home</a></li>
								<li class="smoth-scroll"><a href="{{ url('/') }}#about" class="animte_nav">About</a></li>
								<li class="smoth-scroll"><a href="{{ url('/') }}#service" class="animte_nav">Service</a></li>
								<li class="smoth-scroll"><a href="{{ url('/') }}#team" class="animte_nav">Team</a></li>
								<li class="smoth-scroll"><a href="{{ url('/') }}#gallery" class="animte_nav">Gallery</a></li>
								<li class="smoth-scroll"><a href="{{ url('/') }}#event" class="animte_nav">Event</a></li>
								<li class="smoth-scroll"><a href="{{ url('/login') }}" class="animte_nav">Login</a></li>
							
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- scrolltop to down area start -->
	        
	        <!-- scrolltop to down area End -->

		</div>

		<link rel="stylesheet" href="{{ asset('front_view/bootstrap.min.css') }}">
		<!-- modernizr js file -->
		<script src="http://jsofttheme.com/bizprime-preview/bizprime/assets/js/vendor/modernizr-2.8.3.min.js" type="text/javascript"></script>
		<!-- jquery main file -->
		<script src="{{ asset('front_view/jquery-1.12.0.min.js') }}" type="text/javascript"></script>

		<!-- bootstrap js file -->
		<script src="{{ asset('front_view/bootstrap.min.js') }}" type="text/javascript"></script>

		<!-- Easing js file -->
		<script src="{{ asset('front_view/jquery.easing.1.3.min.js') }}" type="text/javascript"></script>

		<!-- waypoint js file -->
		<script src="{{ asset('front_view/jquery.waypoints.min.js') }}" type="text/javascript"></script>

		<!-- appear js file -->
		<script src="{{ asset('front_view/jquery.appear.js') }}" type="text/javascript"></script>

		<!-- time js file -->
		<script src="{{ asset('front_view/remoteTime.js') }}" type="text/javascript"></script>

		<!-- slick carousel js file -->
		<script src="{{ asset('front_view/slick.min.js') }}" type="text/javascript"></script>

		<!-- counterup js file -->
		<script src="{{ asset('front_view/counterup.min.js') }}" type="text/javascript"></script>

		<!-- camera slider js file -->
		<script src="{{ asset('front_view/camera.min.js') }}" type="text/javascript"></script>

		<!-- Mixitup Filtering js file -->
		<script src="{{ asset('front_view/jquery.mixitup.min.js') }}" type="text/javascript"></script>

		<!-- magnific-popup js file -->
		<script src="{{ asset('front_view/plugins.js') }}" type="text/javascript"></script>

		<!-- plugins js file -->
		<script src="{{ asset('front_view/plugins.js') }}" type="text/javascript"></script>

		<!-- default js file -->
		<script src="{{ asset('front_view/main.js') }}" type="text/javascript"></script>
		<!-- google map -->
		
	</body>
</html>