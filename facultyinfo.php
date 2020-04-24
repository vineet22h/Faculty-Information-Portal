<?php
Include('dbconnection.php');
$id = $_GET["faculty_id"];
$sql1 = "select * from faculty_info where faculty_id ='".$id."'";
$sql2 = "select * from faculty_projects_awards where faculty_id ='".$id."'";
$sql3 = "select * from faculty_qualification where faculty_id ='".$id."'";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

$row1=mysqli_fetch_array($result1);
$row2=mysqli_fetch_array($result2);
$row3=mysqli_fetch_array($result3);
?>

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
		<style >
			h4,table,tr,td,.key{
				color:black;
			}
			h4,table,tr,td,.value{
				color:grey;
				text-transform: capitalize;
			}
		</style>
	</head>

	<body>
		<div class="main-page-wrapper">



			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="theme-main-header" style="background-color: black; opacity: 0.7;">
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
					       	<li class="active"><a href="#home">HOME</a></li>
							<li><a href="search.html">ABOUT FACULTY</a></li>
							<?php 
								session_start();
								if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    							echo "<li><a href=\"logout.php\">LOGOUT</a></li>";
    							echo "<li><a href=\"faculty_update.php\">Update Faculty Information</a></li>";
								} else {
								    echo "<li><a href=\"login.html\">LOGIN</a></li>";
								    echo "<li><a href=\"faculty_update.php\">Update Faculty Information</a></li>";
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
				Team Section
			=====================================================
			-->
			<div id="team-section">
				<div class="container">
					<div class="theme-title" style="padding-top: 30px;">
						<h1><?php echo $row1["name"]; ?></h1>
						<p></p>
					</div> <!-- /.theme-title -->

					<div class="clear-fix team-member-wrapper">
						<div class="float-left">
							<div class="single-team-member">
								<div class="img">
									<img src="images/team/1.jpg" alt="Image">
									<div class="opacity tran4s">
										<h4><?php echo $row1["name"]; ?></h4>
										<span><?php echo $row1["post"]; ?></span>
										<p></p>
									</div>
								</div> <!-- /.img -->
								<div class="member-name">
									<h6><?php echo $row1["name"]; ?></h6>
									<p><?php echo $row1["post"]; ?></p>
									<ul>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										<li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div> <!-- /.member-name -->
							</div> <!-- /.single-team-member -->
						</div> <!-- /float-left -->

						<div >
							<h4>
								<table>
									<tr>
										<td class = "key">Faculty ID : </td>
										<td class = "value"><?php echo $row1["faculty_id"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Name :</td>
										<td class = "value"> <?php echo $row1["name"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Projects : </td>
										<td class = "value"><?php echo $row2["project"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Awards : </td>
										<td class = "value"><?php echo $row2["awards"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Research : </td>
										<td class = "value"><?php echo $row2["research"]; ?></td>
									</tr>
									<tr >
										<td class = "key">Email-id : </td>
										<td class = "value" style="color: grey;text-transform: lowercase;"><?php echo $row1["email"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Branch : </td>
										<td class = "value"><?php echo $row1["branch"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Duration in current college : </td>
										<td class = "value"><?php echo $row1["duration_clg"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Post : </td>
										<td class = "value"><?php echo $row1["post"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Bachelor of Technology : </td>
										<td class = "value"><?php echo $row3["btech"]; ?></td>
									</tr>
									<tr>
										<td class = "key">Master of Technology : </td>
										<td class = "value"><?php echo $row3["mtech"]; ?></td>
									</tr>
									<tr>
										<td class = "key">MBA : </td>
										<td class = "value"><?php echo $row3["mba"]; ?></td>
									</tr>
									<tr>
										<td class = "key">PHD</td>
										<td class = "value"><?php echo $row3["phd"]; ?></td>
									</tr>
								</table>
							</h4>
						</div>
						
					</div> <!-- /.team-member-wrapper -->
				</div> <!-- /.conatiner -->
			</div> <!-- /#team-section -->



			


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