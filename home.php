<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>College Website</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
			
	</head>

	<body>
		<div class="main-page-wrapper">



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header">
				<div class="container">
					<a href="index.html" class="logo float-left tran4s"><img src="images/logo/logo1.png" alt="Logo"></a>
					
					<!-- ========================= Theme Feature Page Menu ======================= -->
					<nav class="navbar float-right theme-main-menu one-page-menu">
					   <!-- Brand and toggle get grouped for better mobile display -->
					   <div class="navbar-header">
					     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
					       <span class="sr-only">Toggle navigation</span>
					       Menu
					       <i class="fa fa-bars" aria-hidden="true"></i>
					     </button>
					   </div>
					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <div class="collapse navbar-collapse" id="navbar-collapse-1">
					     <ul class="nav navbar-nav">
					       	<li class="active"><a href="home.php">HOME</a></li>
							<li><a href="search.html">ABOUT FACULTY</a></li>
							<?php 
								session_start();
								if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    							echo "<li><a href=\"logout.php\">LOGOUT</a></li>";
    							echo "<li><a href=\"faculty_update.php\">Update Faculty Information</a></li>";
								} else {
									
								    echo "<li><a href=\"login.html\">LOGIN</a></li>";
								    echo "<li><a href=\"signup.html\">REGISTER</a></li>";
								}
							?>
							
							<li><a href="#contact-section">CONTACT</a></li>
					     </ul>
					   </div><!-- /.navbar-collapse -->
					</nav> <!-- /.theme-feature-menu -->
				</div>
			</header> <!-- /.theme-main-header -->


			<!--
			=====================================================
				Theme Main SLider
			=====================================================
			-->
			<div id="home" class="banner">
	        	<div class="rev_slider_wrapper">
					<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
						<div id="main-banner-slider" class="rev_slider video-slider" data-version="5.0.7">
							<ul>

								<!-- SLIDE1  -->
								<li data-index="rs-280" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-title="Title Goes Here" data-description="">
									<!-- MAIN IMAGE -->
									<img src="images/home/slide-1.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
									<!-- LAYERS -->

									<!-- LAYER NR. 1 -->
									<div class="tp-caption" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-58','-58','0','-50']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="1000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h1>Welcome to SGGS</h1>
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','-05','63','0']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h6>Creating Engineers for Tomorrow</h6>
									</div>


									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['52','52','125','80']"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="3000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on">
										<a href="contact-us.html" class="project-button hvr-bounce-to-right">See Our Students</a>
									</div>
								
								</li>


								<!-- SLIDE2  -->
								<li data-index="rs-20" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="video/drinkwinecover.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
									<!-- MAIN IMAGE -->
									<img src="video/drinkwinecover.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
									<!-- LAYERS -->

									<!-- BACKGROUND VIDEO LAYER -->
									<div class="rs-background-video-layer" 
										data-forcerewind="on" 
										data-volume="mute" 
										data-videowidth="100%" 
										data-videoheight="100%" 
										data-videomp4="video/Drink-Wine.mp4" 
										data-videopreload="preload" 
										data-videoloop="loopandnoslidestop" 
										data-forceCover="1" 
										data-aspectratio="16:9" 
										data-autoplay="true" 
										data-autoplayonlyfirsttime="false" 
										data-nextslideatend="true" 
									></div>

									<!-- LAYER NR. 1 -->
									<div class="tp-caption" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-58','-33','-33','-100']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="1000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h1>Welcome to SGGS</h1>
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h6>Creating Engineers</h6>
									</div>


									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="3000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on">
										<a href="contact-us.html" class="project-button hvr-bounce-to-right">See Our Students</a>
									</div>
								</li>

								<!-- SLIDE3  -->
								<li data-index="rs-18" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/home/slide-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Title Goes Here" data-description="">
									<!-- MAIN IMAGE -->
									<img src="images/home/slide-2.jpg"  alt="image" class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
									<!-- LAYERS -->

									<!-- LAYER NR. 1 -->
									<div class="tp-caption" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-58','-33','-33','-100']" 
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="1000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h1>Welcome to SGGS</h1>
									</div>

									<!-- LAYER NR. 2 -->
									<div class="tp-caption" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['-05','93','93','20']"
										data-width="none"
										data-height="none"
										data-whitespace="nowrap"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="2000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on" 
										style="z-index: 6; white-space: nowrap;">
										<h6>Creating Engineers</h6>
									</div>


									<!-- LAYER NR. 3 -->
									<div class="tp-caption"
										data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['52','185','185','105']"
										data-transform_idle="o:1;"
							 
										data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:[100%];" 
										data-mask_out="x:inherit;y:inherit;" 
										data-start="3000" 
										data-splitin="none" 
										data-splitout="none" 
										data-responsive_offset="on">
										<a href="contact-us.html" class="project-button hvr-bounce-to-right">See Our Students</a>
									</div>
								</li>
							</ul>	
						</div>
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!--  /#banner -->



			
			<!--
			=====================================================
				Team Section
			=====================================================
			-->
			<div id="team-section">
				<div class="container">
					<div class="theme-title">
						<h2>Meet our Team</h2>
						<p></p>
					</div> <!-- /.theme-title -->

					<div class="clear-fix team-member-wrapper">
						<div class="float-left">
							<div class="single-team-member">
								<div class="img">
									<img src="/final/images/team/prashant.jpg" alt="Image">
									<div class="opacity tran4s">
										<h4>Prashant Mahure</h4>
										<span>Web Developer</span>
										<p></p>
									</div>
								</div> <!-- /.img -->
								<div class="member-name">
									<h6>Prashant Mahure</h6>
									<p>Web Developer</p>
									<ul>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div> <!-- /.member-name -->
							</div> <!-- /.single-team-member -->
						</div> <!-- /float-left -->

						<div class="float-right">
							<div class="single-team-member">
								<div class="img">
									<img src="images/team/vineet.jpg" alt="Image">
									<div class="opacity tran4s">
										<h4>Vineet Haswani</h4>
										<span>Web Developer</span>
										<p></p>
									</div>
								</div> <!-- /.img -->
								<div class="member-name">
									<h6>Vineet Haswani</h6>
									<p>Web Developer</p>
									<ul>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div> <!-- /.member-name -->
							</div> <!-- /.single-team-member -->
						</div> <!-- /float-left -->

						
					</div> <!-- /.team-member-wrapper -->
				</div> <!-- /.conatiner -->
			</div> <!-- /#team-section -->



			


			<!--
			=====================================================
				Contact Section
			=====================================================
			-->
			<div id="contact-section">
				<div class="container">
					<div class="clear-fix contact-address-content">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="left-side">
								<h2>Contact Info</h2>
								
								<ul>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
										<h6>Address</h6>
										<p>SGGS, Vishnupuri , Nanded, Maharashtra - 431606, India</p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-phone" aria-hidden="true"></i></div>
										<h6>Phone</h6>
										<p>+91 7083394795</p>
									</li>
									<li>
										<div class="icon tran3s round-border p-color-bg"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
										<h6>Email</h6>
										<p>pmahure57@gmail.com</p>
									</li>
								</ul>
							</div> <!-- /.left-side -->
						</div> <!-- /.col- -->


					</div> <!-- /.contact-address-content -->

				</div> <!-- /.container -->
			</div> <!-- /#contact-section -->



			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer>
				<div class="container">
					<a href="index.html" class="logo"><img src="images/logo/logo1.png" alt="Logo"></a>

					<ul>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="tran3s round-border"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
					</ul>
					<p>Copyright @2019 All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https:/" target="_blank">Prashant & Vineet</a></p>
				</div>
			</footer>




			<!-- =============================================
				Loading Transition
			============================================== -->
			<div id="loader-wrapper">
				<div id="preloader_1">
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
			</div>

			
	        <!-- Scroll Top Button -->
			<button class="scroll-top tran3s p-color-bg">
				<i class="fa fa-long-arrow-up" aria-hidden="true"></i>
			</button>




		<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.video.min.js"></script>

		<!-- Google map js -->
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZ8VrXgGZ3QSC-0XubNhuB2uKKCwqVaD0&callback=goMap" type="text/javascript"></script> <!-- Gmap Helper -->
		<script src="vendor/gmaps.min.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- mixitUp -->
		<script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
		<!-- Progress Bar js -->
		<script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
		<!-- Validation -->
		<script type="text/javascript" src="vendor/contact-form/validate.js"></script>
		<script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/map-script.js"></script>

		</div> <!-- /.main-page-wrapper -->
	</body>
</html>