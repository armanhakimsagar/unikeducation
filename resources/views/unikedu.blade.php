<!DOCTYPE html>
<html lang="en">
	<head><style>
        .contact_area{
            height:500px!important;
        }
        *{
            font-family: Arial, Helvetica, sans-serif !important;
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
	    
		<!-- Bootstrap css file -->

	   	<link rel="stylesheet" href="{{ asset('front_view/bootstrap.min.css') }}">

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
			<div class="col-md-12 col-sm-12 col-xs-12" style="border-right:1px solid #ccc; padding: 10px">
				<h3> Admin login </h3>
				<br><br>
			  <form method="post" action="{{ url('adminLogin') }}">
			  	{{ csrf_field() }}
			    <div class="form-group">
			      <label for="email">Username:</label>
			      <input type="text" required class="form-control" id="text" placeholder="Enter name" name="name">
			    </div>

			    <div class="form-group">
			      <label for="pwd">Password:</label>
			      <input type="password" required class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
			    </div>

			    <button type="submit" class="btn btn-default">Login</button>
			  </form>
			 </div>
		</div>

		</section>
		<!-- blog_area End -->


		<!-- footer_area start -->
		<footer class="section_padding">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- footer_single_item start -->
						<div class="footer_item">
							<div class="footer_item_content">
								<h4>About</h4>
								<p>HUGE thanks to @gtagliala for doing such a fantastic job managing pull requests and issues on the Font Awesome GitHub project.</p>
							</div>
							<a href="#" class="mt20"><img src="img/logo.png" alt="Logo Image"></a>
							<div class="footer_item_content mt30">
								<h4>Business Agency Site Template</h4>
								<p>HUGE thanks to @gtagliala for doing such a fantastic job managing pull requests and issues on the Font Awesome GitHub project.</p>
								<ul class=" footer_social mt20">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
								</ul>
							</div>

						</div>
						<!-- footer_single_item start -->
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- footer_single_item start -->
						<div class="footer_item">
							<div class="footer_item_content mt767_30">
								<h4>Latest Tweet</h4>
								<div class="tweet_feed">
									<a href="#"><h5><i class="fa fa-twitter" aria-hidden="true"></i>@Jaff_Lthan</h5></a>
									<p>Nam aliquet eros nibh, eu semper mauris pellentesque in. Cras tincidunt cursus purus non lobortis.</p>
								</div>
								<div class="tweet_feed mt20">
									<a href="#"><h5><i class="fa fa-twitter" aria-hidden="true"></i>@Gorge</h5></a>
									<p>Duis sollicitudin est lacus, non tempor dolor placerat eu. Praesent ut tincidunt urna, eu accumsan magna.</p>
								</div>
								<div class="tweet_feed mt20">
									<a href="#"><h5><i class="fa fa-twitter" aria-hidden="true"></i>@Amanda</h5></a>
									<p>Proin a convallis tellus. Nunc rutrum, nulla vitae maximus venenatis, nunc tellus interdum massa, id rhoncus quam purus sed arcu.</p>
								</div>
								<div class="tweet_feed mt20 hide1024">
									<a href="#"><h5><i class="fa fa-twitter" aria-hidden="true"></i>@Amanda</h5></a>
									<p>Proin a convallis tellus. Nunc rutrum, nulla vitae maximus venenatis, nunc tellus interdum massa</p>
								</div>
							</div>

						</div>
						<!-- footer_single_item start -->
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
						<div class="footer_item mt991_30 mt767_30">
							<!-- footer_single_item start -->
							<div class="footer_item_content footer_servie">
								<h4>Future Service</h4>
								<ul class="floatleft">
									<li><a href="#">CMS</a></li>
									<li><a href="#">WoCommer</a></li>
									<li><a href="#">Laravel</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">Marketing</a></li>
									
								</ul>
								<ul class="floatleft">
									<li><a href="#">Admin Panel</a></li>
									<li><a href="#">Admin Dashboard</a></li>
									<li><a href="#">Server Service</a></li>
									<li><a href="#">Hosting</a></li>
									<li><a href="#">Ranking</a></li>
								</ul>
							</div>
							<!-- footer_single_item End -->

							<!-- footer_single_item start -->
							<div class="footer_item_content footer_servie mt20 mt767_30">
								<h4>Quick Link</h4>
								<ul class="floatleft">
									<li><a href="#">CMS</a></li>
									<li><a href="#">WoCommer</a></li>
									<li><a href="#">Laravel</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">Marketing</a></li>
									
								</ul>
								<ul class="floatleft">
									<li><a href="#">Admin Panel</a></li>
									<li><a href="#">Admin Dashboard</a></li>
									<li><a href="#">Server Service</a></li>
									<li><a href="#">Hosting</a></li>
									<li><a href="#">Ranking</a></li>
								</ul>
							</div>
							<!-- footer_single_item End -->
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer_area End -->

		<div class="copy_right ptb30">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copy_right_content">
							<p>© 2017. All Rights Reserved  By <a href="#">Unik Education</a> <br>
								<span style="font-size:8px">Develop by <a href="https://www.linkedin.com/in/armanhakimsagar/">Arman Hakim Sagar</span></p>
						</a></div>
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