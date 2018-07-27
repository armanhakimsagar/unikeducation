<!-----------------

////////////////////////////////

This website designer & developed 
Arman hakim sagar


////////////////////////////////

-->
<style>
        .contact_area{
            height:500px!important;
        }
        *{
            font-family: Arial, Helvetica, sans-serif !important;
        }
    </style>
<!DOCTYPE html>
<html lang="en">
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
						<a href="index.html"><img src="{{ asset('public/logo.jpg') }}" alt="Unik Education" style="height:60px; width:80px;padding:0px"></a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="active smoth-scroll"><a href="index.html#home"><h5><b>Home</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#about" class="animte_nav"><h5><b>About</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#service" class="animte_nav"><h5><b>Service</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#team" class="animte_nav"><h5><b>Team</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#gallery" class="animte_nav"><h5><b>Gallery</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#event" class="animte_nav"><h5><b>Event</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('login') }}" class="animte_nav"><h5><b>Login</b></h5></a></li>
							<li class="smoth-scroll"><a href="{{ url('/') }}#contact" class="animte_nav"><h5><b>Contact</b></h5></a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<!-- navbar end -->
            <style>
                p{
                    font-size:18px;
                }
            </style>
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
UNIK EDUCATION is an overseas educational consultancy organization, dedicated towards providing educational avenues abroad to the students in Bangladesh. UNIK EDUCATION is founded by a group of competent and highly motivated professionals from different sectors including overseas education, language training and overseas job placement. The panel is committed to bring on excellence by providing the students with world-class education solution through effective and professional advice for parents and their children who would like to study abroad. </a></p>
<br><br>
<h3>Your guide to overseas studies</h3>
<p class="mt30 about_pra">UNIK EDUCATION is an overseas educational consultancy organization, dedicated towards providing educational avenues abroad to the students in Bangladesh. UNIK EDUCATION is founded by a group of competent and highly motivated professionals from different sectors including overseas education, language training and overseas job placement. The panel is committed to bring on excellence by providing the students with world-class education solution through effective and professional advice for parents and their children who would like to study abroad.</p>
<br><br>
<h3>Our Team</h3>
<p class="mt30 about_pra">Almost all of our professional staff studied abroad as mature students, and had the first-hand experience of the difficulties and the challenges encountered by students choosing to continue their education in a foreign country. Those experiences have become their incentive to establish UNIK EDUCATION in the hope of assisting and supporting overseas students in adapting to life and study in a different culture.</p>
<br><br>
<h3>Our Mission</h3>
<p class="mt30 about_pra">Being a bridge across cultures and support for academic pursuit of the younger generation is our mission. Our experienced educational counselors are ready to advise students on courses and career opportunities according to their educational background, interests, aptitude, and aspirations. Having a broad network with education providers, we are competent to suggest a wide range of study options and programs to meet the students’ needs.

UNIK EDUCATION is an all-round service provider. Our care and concern continue though the students have left their home country. We offer first-hand assistance to students studying in local institutions, including airport pickup services, helping for part-time jobs, helping arrange accommodation and even opening bank accounts. We also stay in regular contact with our students and liaise with institutions and parents in monitoring students’ progress.

For students choosing to study overseas, we ensure that we only work with education providers that can offer a high standard of academic achievement and student support, and we would maintain regular contact with our students.
</p>
<br><br>
<h3>Message from Directors</h3>
<p class="mt30 about_pra">UNIK EDUCATION is a specialized educational consultancy firm dedicated to providing students boundless Study Opportunities across the globe. We succeed due to the immense effort exerted by a panel of enthusiastic, skillful and experienced workforce.

Indeed, we have passed another vibrant year full of fabulous stories of success. At steps, the selection of educational institutions for the students is done not only based on financial and academic status but also in consideration with acceleration of academic learning atmosphere, cultural sensation and comprehensive awareness. Thus, it is not surprising at all when we successfully place our students in different universities and colleges in abroad incessantly every year from Bangladesh. Off course, in these cases the contribution of parents and guardians is simply unquestionable.

UNIK EDUCATION is a team of well-versed and committed senior educational advisors and counselors who comprehend the need of the students and their parents or sponsors. Our smooth student centered counseling approach gives students abundant information on the all-available options to help them make prudent decisions.

We are and remain as a bridge across cultures and support for academic pursuit of the younger generation.

Thanks
Directors
UNIK EDUCATION
</p>
<br><br>
<h3>
Why Choose UNIK EDUCATION?</h3>

<p class="mt30 about_pra">Professional consulting services
UNIK EDUCATION has more than seven years experiences to provide professional consulting services for students who plan to study or are studying abroad. UNIK EDUCATION has worked closely with a number of reputable overseas institutions and government departments. Close contact and regular training sessions with institutes guarantee that UNIK EDUCATION is equipped with updated course information, application requirements and procedures. Our staff are ready to handle student applications effectively and efficiently. Our one-stop services are tailor-made to meet the needs of students and their parents in different aspects. UNIK EDUCATION is well recognized for its reliability. For its professional services and teams of experienced staff in the representative offices, UNIK EDUCATION is highly regarded within the industry by institutes, parents and students alike.
</p>
<br><br>
<h3>Services at a Glance</h3>
<p class="mt30 about_pra">At UNIK EDUCATION, we guide students to choose the most appropriate foreign institutions and courses, which help students, maximize their potential in gaining higher education to build a promising career.
</p>
<br><br>
<h4>Services 01</h4>
<p class="mt30 about_pra">Providing adequate counseling
Providing adequate counseling for choices of education opportunities in abroad.
</p>
<br><br>
<h4>
Services 02</h4>

<p class="mt30 about_pra">Recommending suitable institutes
Almost all of our professional staff studied abroad as mature students, and had the first-hand experience of the difficulties and the challenges encountered by students choosing to continue their education in a foreign country. Those experiences have become their incentive to establish UNIK EDUCATION in the hope of assisting and supporting overseas students in adapting to life and study in a different culture.
</p>
<br><br>
<h4>
Services 03</h4>
<p class="mt30 about_pra">Representing students
Representing students for lodging applications to higher educational institutes.
</p>
<br><br>
<h4>Services 04</h4>
<p class="mt30 about_pra">Providing language courses
Providing language courses, vocational education and training program.
Providing language mock test for our students. 
</p>
<br><br>
<h4>Services 05</h4>
<p class="mt30 about_pra">Assisting students in visa applications
Assisting students in visa applications and medical check-up appointments and Booking air tickets.
</p>
<br><br>
<h4>Services 06</h4>
<p class="mt30 about_pra">Insurance
Assisting to obtain health and travel insurance
</p>
<br><br>
<h4>Services 07</h4>
<p class="mt30 about_pra">Airport pick-up services
Accommodation
Part time job support
</p>
<br><br>
<h4>Services 08</h4>
<p class="mt30 about_pra">Hosting education
Hosting education exhibitions, seminars and interview sessions
</p>
<br><br>
<h3>Our Service Process</h3>
<p class="mt30 about_pra">Our implementation approach as Agile Transparency. We work efficiently and collaboratively. Our clients always know exactly what we are doing, how we are doing it.
</p>
<p class="mt30 about_pra">
<h4>Step 1</h4><br>
Visit UNIK EDUCATION office and talk to our experienced student counselors.

<h4>Step 2</h4><br>
Fill in the application form and UNIK EDUCATION will help lodge the application.

<h4>Step 3</h4><br>
UNIK EDUCATION will inform you as soon as the offer letter is received.

<h4>Step 4</h4><br>
Sign the acceptance of the offer letter and make payment of the tuition fee.

<h4>Step 5</h4><br>
Receive the Confirmation of Enrollment (COE).

<h4>Step 6</h4><br>
Lodge student visa application.

<h4>Step 7</h4><br>
Attend pre-departure seminar arranged by UNIK EDUCATION.
<br><br>
<h3>We are offering different countries
Study abroad program for our students</h3>
<br>
<h4>1.	Sweden</h4>
<h4>2.	Hungary</h4>
<h4>3.	Poland</h4>
<h4>4.	Lithuania</h4>
<h4>5.	Japan</h4>
<h4>6.	India </h4>
<h4>7.	China</h4>
<h4>8.	South korea</h4>









</p>
						</div>
						<!-- about_content end -->
					</div>
				</div>
			</div>
		</section>
		<!-- about_area End -->

		


		<div class="copy_right ptb30">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copy_right_content">
							<p>© 2017. All Rights Reserved  By <a href="#">Unik Education</a> <br>
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