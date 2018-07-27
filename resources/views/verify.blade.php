<!-----------------

////////////////////////////////

This website designer & developed 
Arman hakim sagar


////////////////////////////////

-->

<!DOCTYPE html>
<html lang="en"><style>
        .contact_area{
            height:500px!important;
        }
        *{
            font-family: Arial, Helvetica, sans-serif !important;
        }
    </style>
    <style>
        .contact_area{
            height:500px!important;
        }
    </style>
	<head>
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
		<style type="text/css">
			.contact_area{
				height: 1000px
			}
		</style>

	</head>
	<body>

	    


		<!-- header_area start -->
		<header id="home">
			<!-- navtop area start -->
			<div class="navtop" style="background-color:#0099FF">
				<div class="container">
					<div class="row">
						<b style="font-size:14px">
						<div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
							<div class="left_box">
								<span style="color:#fff; margin-right:20px"><i class="fa fa-book" aria-hidden="true"></i> Contact now : +8801968666111, +8801968666222 </span>
								<span style="color:#fff;font-size:12px"><i class="fa fa-envelope" aria-hidden="true"></i> Email : info@unikedubd.com</span>
							</div>
						</div>
						<div class="col-md6 col-sm-6 col-xs-12">

							<div class="social-link">
								<ul>
									<li><a href="#" style="color:#fff"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
									<li ><a href="#" style="color:#fff"><i class="fa fa-twitter" aria-hidden="true"></i> google +</a></li>
									<li><a href="#" style="color:#fff"><i class="fa fa-youtube" aria-hidden="true"></i> youtube </a></li>
									<li><a href="#" style="color:#fff"><i class="fa fa-youtube" aria-hidden="true"></i> Skype </a></li>
								</ul>
							</div>
						</div>
						</b>
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
						<a href="index.html"><img src="{{ asset('public/logo.jpg') }}" alt="Unik Education"  style="height:60px; width:80px;padding:0px"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active smoth-scroll"><a href="index.html#home"><h5><b>Home</b></h5></a></li>
							<li class="smoth-scroll"><a href="#about" class="animte_nav"><h5><b>About</b></h5></a></li>
							<li class="smoth-scroll"><a href="#service" class="animte_nav"><h5><b>Service</b></h5></a></li>
							<li class="smoth-scroll"><a href="#team" class="animte_nav"><h5><b>Team</b></h5></a></li>
							<li class="smoth-scroll"><a href="#gallery" class="animte_nav"><h5><b>Gallery</b></h5></a></li>
							<li class="smoth-scroll"><a href="#event" class="animte_nav"><h5><b>Event</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('login') }}" class="animte_nav"><h5><b>Login</b></h5></a></li>
							<li class="smoth-scroll"><a href="#contact" class="animte_nav"><h5><b>Contact</b></h5></a></li>
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
			<div class="col-md-12 col-sm-6 col-xs-12">
				
				@if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                
                @if ($errors->has('email'))

                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                
                @endif
                
                @if ($errors->has('phone'))

                    <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                                
                @endif
                
			  
                <form action="{{ url('sms_submit') }}" method="post">
                    <input type="hidden" value="{{ $phone }}" name="phone" />
                    <input type="hidden" name="name" value="{{ $name }}">
                    <input type="hidden" name="email" value="{{ $email }}">
                    <input type="hidden" value="{{ $verification_code }}" name="verification_code" />
                    {{ csrf_field() }}
			        <button type="submit" class="btn btn-default">Send Verification Code</button>
			    </form>
			 

			 <form method="post" action="{{ url('RegistrationSubmit') }}">
			     {{ csrf_field() }}
			     <input type="hidden" name="name" value="{{ $name }}">
                 <input type="hidden" name="email" value="{{ $email }}">
                 <input type="hidden" name="phone" value="{{ $phone }}">
                 <input type="hidden" name="verification_code" value="{{ $verification_code }}">
                 <br><br>
    			 <div class="form-group">
    		      <label for="pwd">Type Your Verification Number Here:</label>
    		      <input type="number" required class="form-control" name="submit_number">
    		    </div>
    		    <button type="submit" class="btn btn-default">Confirm</button>
    		 </form>
		  </div>
		</div>

		</section>
		<!-- blog_area End -->



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