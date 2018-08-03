<!-----------------

////////////////////////////////

This website designer & developed 
Arman hakim sagar
       

////////////////////////////////

-->

<!DOCTYPE html>
<html lang="en">
    <style>
        .contact_area{
            height:800px!important;
        }
        *{
            font-family: Arial, Helvetica, sans-serif !important;
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

	   	<link rel="stylesheet" href="http://priyofashion.com/css/boot.css">


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


	    <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=270632526821127&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>


		<!-- header_area start -->
		<header id="home">
			<!-- navtop area start -->
			<div class="navtop" style="background-color:#0099FF">
				<div class="container">
					<div class="row">
						<b style="font-size:14px">
						<div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
							<div class="left_box" style="font-family:">
								<span style="color:#fff; margin-right:20px"><i class="fa fa-book" aria-hidden="true"></i> Contact now : +8801968666111, +8801968666222 </span>
								<span style="color:#fff;font-size:12px"><i class="fa fa-envelope" aria-hidden="true"></i> Email : info@unikedubd.com</span>
							</div>
						</div>
						<div class="col-md6 col-sm-6 col-xs-12">

							<div class="social-link">
								<ul>
									<li><a href="https://www.facebook.com/unik.edu.injapan" style="color:#fff"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</a></li>
									<li ><a href="https://www.youtube.com/channel/UC6K2xXWg19wl__W_Ww1D4EA?view_as=subscriber" style="color:#fff"><i class="fa fa-twitter" aria-hidden="true"></i> youtube </a></li>
									<li><a href="https://plus.google.com/115462666860565861972" style="color:#fff"><i class="fa fa-youtube" aria-hidden="true"></i> google + </a></li>
									<li><a href="https://www.instagram.com/unik_education/" style="color:#fff"><i class="fa fa-youtube" aria-hidden="true"></i> Instagram </a></li>
									<li><a href="https://twitter.com/EducationUnik" style="color:#fff"><i class="fa fa-youtube" aria-hidden="true"></i> Twitter </a></li>
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
						<a href="{{ url('/') }}"><img src="{{ asset('public/logo.jpg') }}" alt="Unik Education" style="height:60px; width:80px;padding:0px"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active smoth-scroll"><a href="#home"><h5><b>Home</b></h5></a></li>
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

		<!-- slider_area start -->
		<script type="text/javascript">
			$(function(){
			    $('.carousel').carousel({
			      interval: 400
			    });
			});
		</script>
		<div class="container-fluid" style="padding:0px">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active">
				<img src="{{ asset('public/s1.png') }}" alt="Los Angeles" style="width:100%;height:550px">
			  </div>

			  <div class="item">
				<img src="{{ asset('public/s2.png') }}" alt="Chicago" style="width:100%;height:550px">
			  </div>
			
			  <div class="item">
				<img src="{{ asset('public/s3.png') }}" alt="New york" style="width:100%;height:550px">
			  </div>

			  <div class="item">
				<img src="{{ asset('public/s4.png') }}" alt="New york" style="width:100%;height:550px">
			  </div>
			  
			  <div class="item">
				<img src="{{ asset('public/s5.png') }}" alt="New york" style="width:100%;height:550px">
			  </div>
			  
			  <div class="item">
				<img src="{{ asset('public/s6.png') }}" alt="New york" style="width:100%;height:550px">
			  </div>


			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class=""></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class=""></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>

		<!-- /slider_area end -->

		<!-- about_area start -->
		<section class="about_area section_padding" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- about_content start -->
						<div class="about_content mt767_30">
							<h3>About US</h3>
							<h4>Your guide to overseas studies</h4>
							<p class="mt30 about_pra">
UNIK EDUCATION is an overseas educational consultancy organization, dedicated towards providing educational avenues abroad to the students in Bangladesh. UNIK EDUCATION is founded by a group of competent and highly motivated professionals from different sectors including overseas education, language training and overseas job placement. The panel is committed to bring on excellence by providing the students with world-class education solution through effective and professional advice for parents and their children who would like to study abroad. <a href="{{ url('about_more') }}" class="label label-success">Read More</a></a></p>
							
						</div>
						<!-- about_content end -->
					</div>
				</div>
			</div>
		</section>
		<!-- about_area End -->

		

		<!-- service_area start -->
		<section class="service_area section_padding" id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>Our Service</h3>
						</div>
						<!-- section_title end -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- service_single_item start -->
							<a href="{{ url('liftlet_japan') }}">
								<div class="service_icon textcenter" style="height:250px;width:100%;">
									<img src="{{ asset('public/japann.png') }}" style="height:250px;width:250px">
								</div>
								<br>
								<h4 align="center">Japan</h4>
							</a>
						<!-- service_single_item End -->
					</div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- service_single_item start -->
							<a href="{{ url('liftlet_europe') }}">
								<div class="service_icon textcenter" style="height:250px;width:100%;">
									<img src="{{ asset('public/europe.png') }}" style="height:250px;width:250px">
								</div>
								<br>
								<h4 align="center">Europe </h4>
								</a>
						<!-- service_single_item End -->
					</div>
					

					<div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- service_single_item start -->
						<a href="{{ url('liftlet_korea') }}">
							<div class="service_icon textcenter" style="height:250px;width:100%;">
								<img src="{{ asset('public/korea.png') }}" style="height:250px;width:250px">
							</div>
							<br>
							<h4 align="center">Korea </h4>
						</a>
						<!-- service_single_item End -->
					</div>
				</div>
				<div class="row" style="margin-top:50px">
				    
				    <div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- service_single_item start -->
							<a href="{{ url('liftlet_china') }}">
								<div class="service_icon textcenter" style="height:250px;width:100%;">
									<img src="{{ asset('public/china.png') }}" style="height:200px;width:250px;margin-top:30px">
								</div>
								<br>
								<h4  align="center">China </h4>
								</a>
						<!-- service_single_item End -->
					</div>
					

					<div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- service_single_item start -->
						<a href="{{ url('liftlet_sweden') }}">
							<div class="service_icon textcenter" style="height:250px;width:100%;">
								<img src="{{ asset('public/sweden.png') }}" style="height:200px;width:250px;margin-top:30px">
							</div>
							<br>
							<h4 align="center">Sweden</h4>
						</a>
						<!-- service_single_item End -->
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12">
					    <!-- service_single_item start -->
						<a href="{{ url('liftlet_hungary') }}">
							<div class="service_icon textcenter" style="height:250px;width:100%;">
								<img src="{{ asset('public/hungary.svg') }}" style="height:200px;width:250px;margin-top:30px">
							</div>
							<br>
							<h4 align="center">Hungary</h4>
							</a>
						<!-- service_single_item End -->
					</div>
				 </div>
				</div>
			</div>
		</section>
		<!-- service_area End -->

		<!-- team_area start -->
		<section class="team-area section_padding" id="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>Our Team</h3>
						</div>
						<!-- section_title end -->
					</div>
				</div>


				<div class="row">

					<style type="text/css">
						#popup { 
						  height:100%;
						  width:100%;
						  background-color:#fff; 
						  border:2px solid #ccc; 
						  display:none;
						  margin-bottom: 20px
						}
					</style>



					<div id="popup1">
						<div class="row">
						  <div class="col-sm-12 col-md-12">
						    <div class="thumbnail">
						      <img src="{{ asset('public/e1.jpg') }}" style="height:200px;width:150px;float:left;margin:30px">
						      <div class="caption" style="height:250px">

						        <h3>Md. Nashir Uddin</h3><br>
						        <h6>+8801968666111, +8801968666222 </h6> <br>
						        <h6>Email : info@unikedubd.com</h6>
						        <p> <button onClick="hide_func_1()"   class="btn btn-denger" style="float:right;background-color:#f00;color:#fff">Close</button><br><br></p>

						      </div>
						    </div>
						  </div>
						</div>
					</div>

					<div id="popup2">
						<div class="row">
						  <div class="col-sm-12 col-md-12">
						    <div class="thumbnail">
						      <img src="{{ asset('public/e2.jpg') }}" style="height:200px;width:150px;float:left;margin:30px">
						      <div class="caption" style="height:250px">

						        <h3>Mohammad Hossain</h3><br>
						        <h6>+8801968666111, +8801968666222 </h6><br>
						        <h6>Email : info@unikedubd.com</h6>
						        <p> <button onClick="hide_func_2()"  class="btn btn-denger" style="float:right;background-color:#f00;color:#fff">Close</button><br><br></p>

						      </div>
						    </div>
						  </div>
						</div>
					</div>

					<div id="popup3">
						<div class="row">
						  <div class="col-sm-12 col-md-12">
						    <div class="thumbnail">
						      <img src="{{ asset('public/e3.jpg') }}" style="height:200px;width:150px;float:left;margin:30px">
						      <div class="caption" style="height:250px">

						        <h3>Lutfor Rahman</h3><br>
						        <h6>+8801968666111, +8801968666222 </h6><br>
						        <h6>Email : info@unikedubd.com</h6>
						        <p> <button onClick="hide_func_3()" class="btn btn-denger" style="float:right;background-color:#f00;color:#fff">Close</button><br><br></p>

						      </div>
						    </div>
						  </div>
						</div>
					</div>


					<div id="popup4">
						<div class="row">
						  <div class="col-sm-12 col-md-12">
						    <div class="thumbnail">
						      <img src="{{ asset('public/e4.jpg') }}" style="height:200px;width:150px;float:left;margin:30px">
						      <div class="caption" style="height:250px">

						        <h3>Afsana Rouf Tarin</h3><br>
						        <h6>+8801968666111, +8801968666222 </h6><br>
						        <h6>Email : info@unikedubd.com</h6>
						        <p> <button onClick="hide_func_4()"  class="btn btn-denger" style="float:right;background-color:#f00;color:#fff">Close</button><br><br></p>

						      </div>
						    </div>
						  </div>
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- team_slider start -->
						<div class="team_slider">

							<div class="col-md-3 col-sm-3 col-xs-12">
							<!-- single team_item start -->
							    <div class="single_team_item" onClick="show_func_1()">
							    	<div class="team_img floatleft">
							    		<img src="{{ asset('public/e1.jpg') }}" alt="Team member" style="width:270px;height:350px">
							    		<div class="team_hover">
							    			<div class="team_hover_content">
							    				<h4>Md. Nashir Uddin</h4>
							    				<i class="fa fa-laptop" aria-hidden="true"></i>
							    				<p></p>
							    			</div>
							    		</div>
							    	</div>
							    </div>
							    <!-- single team_item start -->
							</div>



							<div class="col-md-3 col-sm-3 col-xs-12">
							<!-- single team_item start -->
							    <div class="single_team_item" onClick="show_func_2()">
							    	<div class="team_img floatleft">
							    		<img src="{{ asset('public/e2.jpg') }}" alt="Team member" style="width:270px;height:350px">
							    		<div class="team_hover">
							    			<div class="team_hover_content">
							    				<h4>Mohammad Hossain</h4>
							    				<i class="fa fa-laptop" aria-hidden="true"></i>
							    				<p></p>
							    			</div>
							    		</div>
							    	</div>
							    </div>
							    <!-- single team_item start -->
							</div>




							<div class="col-md-3 col-sm-3 col-xs-12">
							<!-- single team_item start -->
							    <div class="single_team_item" onClick="show_func_3()">
							    	<div class="team_img floatleft">
							    		<img src="{{ asset('public/e3.jpg') }}" alt="Team member" style="width:270px;height:350px">
							    		<div class="team_hover">
							    			<div class="team_hover_content">
							    				<h4>Lutfor Rahman</h4>
							    				<i class="fa fa-laptop" aria-hidden="true"></i>
							    				<p></p>
							    			</div>
							    		</div>
							    	</div>
							    </div>
							    <!-- single team_item start -->
							</div>





							


							
							
						    <!-- single team_item start -->
						</div>
						<br><br>
						<a href="{{ url('our_team') }}" class="btn btn-success print" style="color:#fff">Click Here View All Team Member</a>

						<!-- team_slider start -->
					</div>
				</div>
			</div>
		</section>
		<!-- team_area End -->
		

		<!-- gallery_area start -->
		<section class="gallery_area section_padding" id="gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>Gallery</h3>

						</div>
						<!-- section_title end -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="gallery_items">


							<div class="mix gallery_img web">
								<img src="{{ asset('public/2.jpg') }}">
							</div>


							<div class="mix gallery_img web">
								<img src="{{ asset('public/3.jpg') }}">
							</div>


							<div class="mix gallery_img web">
								<img src="{{ asset('public/4.jpg') }}">
							</div>


							<div class="mix gallery_img web">
								<img src="{{ asset('public/13.jpg') }}">
							</div>

								<a href="{{ url('photo_gallery') }}" class="btn btn-success web" style="color:#fff">Click Here View All Photo</a>
							<hr> 


							
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/PXXGhw3grK4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								
								    <a href="https://www.youtube.com/embed/PXXGhw3grK4">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/YQBE-4kx7Mc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								
								    <a href="https://www.youtube.com/embed/YQBE-4kx7Mc">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/0LAwFRgmjSE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								    <a href="https://www.youtube.com/embed/0LAwFRgmjSE">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <iframe width="100%" height="315" src="https://www.youtube.com/embed/SYoHhG-i788" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								
								    <a href="https://www.youtube.com/embed/SYoHhG-i788">
									<i class="fa fa-plus" aria-hidden="true"></i>
								</a>
							</div>

							<a href="{{ url('all_video') }}" class="btn btn-success print" style="color:#fff">Click Here View All Video</a>



						</div><!--portfolio_img_lists-->
					</div>
				</div>
			</div>
		</section>
		
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>Testimonial</h3>

						</div>
						<!-- section_title end -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">


							<div class="col-lg-4">
								<img src="{{ asset('public/p42.jpg') }}">
							</div>


							<div class="col-lg-4">
								<img src="{{ asset('public/p45.jpg') }}">
							</div>


							<div class="col-lg-4">
								<img src="{{ asset('public/p52.jpg') }}">
							</div>
							<a href="{{ url('all_photo') }}" class="btn btn-success web" style="color:#fff; margin-top:20px">Click Here View Testimonial</a>
					
								<hr> 
					</div>
							
			    </div>
		    </div>
		</div>
		<!-- gallery_area End -->


		<!-- testimonial_area start 
		<section class="testimonial_area section_padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section_title white_shape">
							<h3>Testimonial</h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="clients_testimonial">

							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Koreoj Una</h3>
							</div>
							
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Thomas</h3>
							</div>
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Caroten</h3>
							</div>
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Mehedi</h3>
							</div>
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Mehedi</h3>
							</div>
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Mehedi</h3>
							</div>
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Mehedi</h3>
							</div>
							
							<div class="single_testimonial_item">
								<div class="test_quote"><i class="fa fa-quote-left" aria-hidden="true"></i></div>
								<p>written declaration certifying to a person's character, conduct.</p>
								<div class="client_image">
									<img src="{{ asset('front_view/img/1a.jpg') }}" alt="Client Image">
								</div>
								<h3>Mehedi</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		 -->
        
		<section class="blog_area section_padding" id="event">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>Latest Event</h3>
						</div>
						<!-- section_title end -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">

					    <div class="fb-page" data-href="https://www.facebook.com/unik.edu.injapan/" data-tabs="timeline" data-width="300" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/unik.edu.injapan/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/unik.edu.injapan/">Study &amp; Work in japan</a></blockquote></div>
					    </div>

					<div class="col-md-4 col-sm-6 col-xs-12">

					    <div class="fb-page" data-href="https://www.facebook.com/unik.education.china/" data-tabs="timeline" data-width="300" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/unik.education.china/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/unik.education.china/">Scholarship in China</a></blockquote></div>
					</div>

					<div class="col-md-4 col-xs-12 hidden-sm">

					    <div class="fb-page" data-href="https://www.facebook.com/uniksweden/" data-tabs="timeline" data-width="300" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/uniksweden/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/uniksweden/">Study Work &amp; Settle in Sweden</a></blockquote></div>
					</div>

					<br><br>
				</div>
			</div>
		</section>
		<!-- contact_area start -->
		<section class="contact_area section_padding" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!-- section_title start -->
						<div class="section_title">
							<h3>Contact Us</h3>
						</div>
						<!-- section_title end -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-6">
						<!-- contact_dtl end -->

						<!-- google_amp start -->
						<div class="google_map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.168863948664!2d90.38044595015913!3d23.741356984518205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b7605aaaab%3A0xd97071d4736b671c!2sUNIK+Education!5e0!3m2!1sen!2sbd!4v1530852148247" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<!-- google_map end -->
					</div>
				</div>	
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-6">
					    <br><br>
					    <h3> Send Us Message </h3>
					    @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        @endif
					    <br>
					     <form action="{{ url('message') }}" method="post">
					         {{ csrf_field() }}
                          <div class="form-group">
                            <label for="email">Title:</label>
                            <input type="text" name="title" class="form-control" id="title">
                          </div>
                          <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="email">Mobile:</label>
                            <input type="email" name="mobile" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="pwd">Message:</label>
                            <textarea class="form-control" id="textarea" name="textarea"></textarea>
                          </div>
                          <button type="submit" class="btn btn-default">Send</button>
                        </form> 
						<!-- google_map end -->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
					    <br><br><br><br><br>
					    <div class="panel panel-primary">
                          <div class="panel-heading">UNIK Education Bangladesh Office</div>
                          <div class="panel-body">
                            House #1, Road #5, Dhanmonni, Dhaka-1209, Bangladesh
                            Phone +8801999935739, +8801968666111, +8801968666222</div>
                        </div>
                        <div class="panel panel-primary">
                          <div class="panel-heading">UNIK Education Malaysia Office</div>
                          <div class="panel-body">
                              Lot- 2-4, 2nd Floor, Kompleks Mutiara, Jalan ipoh, Kuala Lumpur, Malaysia. 
                          </div>
                        </div>
                        <div class="panel panel-primary">
                          <div class="panel-heading">UNIK Education Japan Office</div>
                          <div class="panel-body">
                            1-22-2 # 300 3rd Floor, Tokyo-to, Kita-ku, Tokyo-114-0002, Japan.
                            Phone- +818066673320, +819077058380
                        </div>
                        </div>
					</div>
					</div>
				</div>
			</div>
		

		<br><br>
		<!-- contact_area End -->


		<div class="copy_right ptb30">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copy_right_content">
							<p>© 2012. All Rights Reserved  By <a href="#">Unik Education</a> <br>
								<span style="font-size:8px"><a href="https://www.linkedin.com/in/armanhakimsagar/">Develop by Arman Hakim Sagar</a></span>
						   </p>
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
		<script type="text/javascript">
		    document.getElementById("popup1").style.display = "none";
		    document.getElementById("popup2").style.display = "none";
		    document.getElementById("popup3").style.display = "none";
		    document.getElementById("popup4").style.display = "none";
			function show_func_1(){
				document.getElementById("popup1").style.display = "block";
			}

			function hide_func_1(){
				document.getElementById("popup1").style.display = "none";
			}

			function show_func_2(){
				document.getElementById("popup2").style.display = "block";
			}

			function hide_func_2(){
				document.getElementById("popup2").style.display = "none";
			}

			function show_func_3(){
				document.getElementById("popup3").style.display = "block";
			}

			function hide_func_3(){
				document.getElementById("popup3").style.display = "none";
			}

		</script>
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
