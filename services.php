<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> HMS</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body style="font-family: 'Times New Roman', serif;">

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<br>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">
					<img src="https://www.iiests.ac.in/assets/images/iiest.png" style="width: 40%" >
				</div>
				<div class="col-md-5 col-12">
					<img src="https://www.iiests.ac.in/assets/images/banner2.png" style="height: 60px;">
				</div>
			</div>
		</div>
		<br>
	<header style="background-color: rgb(2, 48, 32)">
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php" style="font-size:30px">HMS<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item active">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						
						
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="message_user.php">Messages Received</a>
							
						</li>
						<li class="nav-item">
						<a class="nav-link" href="vacate_room_user.php">Vacate Room</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="due_payment.php">Pay Due</a>
					    </li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	<!--Header-->
</div>

<?php
	$query4 = "SELECT * FROM Hostel"; 
	$result4 = mysqli_query($conn,$query4);
?>
<section class="services py-5">
	<div class="container py-lg-5 py-3">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Hostels </h2>
		<div class="row service-grids">
			<?php
			if(mysqli_num_rows($result4)==0){
				echo '<h4>No Hostels Returned</h4>';
			}
			else{
				while($row4 = mysqli_fetch_assoc($result4)){
					
					$hostel_name = $row4['Hostel_name'];
					$year = $row4['Year'];
					$gender = $row4['Gender']
			?>
			<div class="col-lg-3 col-sm-6 service-grid1">
				<br>
				<h3><?php  echo "$hostel_name";  ?> Hostel</h3>
				<div class="row">
					<div class="col-md-2 col-2">
						<h4><?php  echo "$year";  ?> yr</h4>
					</div>
					<div class="col-md-11 col-10">
						<p><?php  echo "$gender";  ?> Hostel</p>
					</div>
				</div>
			</div>
			<br>
			<?php
			}
			}
			?>
			
			
		</div>
	</div>
</section>
<!-- services -->

<?php
	$query4 = "SELECT * FROM Hostel"; 
	$result4 = mysqli_query($conn,$query4);
?>
	<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<?php
					if(mysqli_num_rows($result4)==0){
						echo '<h4>No Hostels Returned</h4>';
					}
					else{
						$count = 0;
						while($row4 = mysqli_fetch_assoc($result4)){
							$hostel_name = $row4['Hostel_name'];
							$year = $row4['Year'];
							$gender = $row4['Gender'];
							$count = ($count + 1) % 6;
							if($count == 1){
					?>
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<br>
						<br>
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for <?php  echo "$hostel_name";  ?>-Hostel</h3>
								<p><?php  echo "$gender";  ?> Hostel</p>
								<p><?php  echo "$year";  ?> yr</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=<?php  echo "$hostel_name"  ?>"><img src="web_home/images/s1.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<?php
							}
							else if($count == 2){
								?>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<br>
						<br>
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for <?php  echo "$hostel_name";  ?>-Hostel</h3>
								<p><?php  echo "$gender";  ?> Hostel</p>
								<p><?php  echo "$year";  ?> yr</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=<?php  echo "$hostel_name"  ?>"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<?php
							}
					else if($count == 3){
						?>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<br>
						<br>
						<div class="view view4 view-tenth" style="background: #DE3163;">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for <?php  echo "$hostel_name";  ?>-Hostel</h3>
								<p><?php  echo "$gender";  ?> Hostel</p>
								<p><?php  echo "$year";  ?> yr</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=<?php  echo "$hostel_name"  ?>"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<?php
							}
					else if($count == 4){
						?>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<br>
						<br>
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for <?php  echo "$hostel_name";  ?>-Hostel</h3>
								<p><?php  echo "$gender";  ?> Hostel</p>
								<p><?php  echo "$year";  ?> yr</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=<?php  echo "$hostel_name"  ?>"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<?php
							}
					else if($count == 5){
						?>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<br>
						<br>
						<div class="view view5 view-tenth" style="background: #F08080;">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for <?php  echo "$hostel_name";  ?>-Hostel</h3>
								<p><?php  echo "$gender";  ?> Hostel</p>
								<p><?php  echo "$year";  ?> yr</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=<?php  echo "$hostel_name"  ?>"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<?php
					}
						else if($count == 0){		
					?>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<br>
						<br>
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for <?php  echo "$hostel_name";  ?>-Hostel</h3>
								<p><?php  echo "$gender";  ?> Hostel</p>
								<p><?php  echo "$year";  ?> yr</p>
							</div>
							<div class="mask">
								<a href="application_form.php?id=<?php  echo "$hostel_name"  ?>"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<?php
						}
					}
					}
					?>
					
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- banner-bottom -->

<br>
<br>

<footer class="py-5" style="background: rgb(2, 48, 32)">
	<div class="container py-md-3">
		<div class="footer"style="background: rgb(2, 48, 32)">
			<div class="row">
				
				<div class="col-12 col-sm-7 ">
					<div class="footer-logo mb-5 text-center">
						<a class="navbar-brand mb-2" href="https://www.iiests.ac.in/" target="_blank">IIEST <span class="display"> SHIBPUR</span></a>
					</div>
					<div class="row">
						<div class="col-4 col-sm-1">
							<ul class="footer-nav text-center">
								<li>
									<a href="home.php">Home</a>
								</li>
								
								<li>
									<a href="services.php">Hostels</a>
								</li>
								<li>
									<a href="contact.php">Contact</a>
								</li>
								<li>
									<a href="profile.php">Profile</a>
								</li>
							</ul> 
						</div>
						<div class="col-7 offset-2 col-sm-6">
							<div style="color:white;">
									<h3>Our Address</h3>
									<address>
									Shibpur, Howrah<br>
									<i class="fa fa-phone fa-lg"></i>:(+91) 62967 86304<br>
									<i class="fa fa-envelope fa-lg"></i> : 
									<a href="mailto:sayanighosh5112000@gmail.com" style="color: white">sayanighosh5112000@gmail.com</a>
									</address>
							</div>		
						</div>
					</div>
					<div class="row">
					<div class="col-12 col-sm-7 align-self-center">
						<div style="color:white;">
								<div class="text-center">
									<a class="btn btn-social-icon btn-google" href="http://google.com/"><image src="web_home/images/google.png" height="30px" width="30px"></image></a>
									<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/"><image src="web_home/images/fb.png" height="30px" width="30px"></a>
									<a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/"><image src="web_home/images/ln.png" height="30px" width="30px"></a>
									<a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><image src="web_home/images/twitter.png" height="30px" width="30px"></i></a>
									<a class="btn btn-social-icon btn-google" href="http://youtube.com/"><image src="web_home/images/yt.png" height="30px" width="30px"></i></a>
									<a class="btn btn-social-icon" href="mailto:"><image src="web_home/images/gmail.png" height="30px" width="30px"></i></a>
								</div>
						</div>		
            		</div>
					</div>
				</div>
				<div class="col-12 col-sm-5" height="20px">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.638303979906!2d88.3049791142734!3d22.555218039294207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0279c91a8d2d49%3A0xc6ee508c74cf031d!2sIndian%20Institute%20of%20Engineering%20Science%20and%20Technology%2C%20Shibpur!5e0!3m2!1sen!2sin!4v1635442222559!5m2!1sen!2sin" width="600" height="50" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			
			<div class="row justify-content-center">             
                    <div class="col-auto" style="color:white;">
                        <p>?? Copyright 2021</p>
                    </div>
            </div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->  
	<!-- //banner js --> 

	<!-- flexSlider --><!-- for testimonials -->
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>