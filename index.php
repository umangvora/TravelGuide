<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TravelGuide</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style2.css"/>
<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>



<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelGuide</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="#">home</a></li>
								<li class="main_nav_item"><a href="about.html">about us</a></li>
								<li class="main_nav_item"><a href="offers.html">Packages</a></li>
								<li class="main_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
								<div class="user_box_login user_box_link"><a href="login.php">login</a></div>
								<div class="user_box_register user_box_link"><a href="register.php">register</a></div><br/>
								<div class="current_user" >Welcome <?php if(isset($_SESSION['username'])){ echo $_SESSION['username'];}  ?></div>
								<div class="current_user"><a href="logout.php">LOGOUT</a></div>
							</div>
					</div>
			</div>	
		</nav>

	</header>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
			<ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            <li><span>Image 05</span></li>
            <li><span>Image 06</span></li>
        </ul>
			<div class="home_slider_content text-center">
					<h1>discover</h1>
					<h1>the world</h1>
					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<input type="text" class="destination search_input" name="serch123" required="required">
							</div>
							
					</div>
					<div><input type="submit" name="search1" value="search" id="form_submit_button" class="form_submit_button button trans_200"></input></div>
						</form>
				</div>
			</div>
	</div>
	
	<!-- Intro -->
	
	<div class="intro">
		<div class="container">


<?php
 
    $conn = mysqli_connect('localhost','root','123' ,'maindata');
if(isset($_GET['serch123']))
    {

?>
<div class="intro_title"> About <?php echo $_GET['serch123']; ?></div>
<?php
$stay=$_GET['serch123'];
    $query = "select * from maindata where city='$stay'";
    $query_run = mysqli_query($conn,$query);
    
?>
<center>
		<table border="solid">
			<tr>
				<td>City</td>
				<td>Famous places</td>
				<td>Top Hotels</td>
				<td>Top Restaurants</td>
				<td>Other Details</td>
			</tr>
			<?php 
				foreach($query_run as $result){
    
			?>
			<tr>
				<td><?php echo $result['city'];   ?></td>
				<td><?php echo $result['Famouse places']; ?></td>
				<td><?php echo $result['top hotels']; ?></td>
				<td><?php echo $result['top restaurants']; ?></td>
				<td><?php echo $result['other details'];   ?></td>
			</tr>
			<?php
				}
			 ?>

		</table>
	</center>
<?php
}
?>

			<div class="row">
				<div class="col">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_background" style="background-image:url(images/home_slider.jpg)"></div>
								
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_background" style="background-image:url(images/about_background.jpg)"></div>
							</div>

							<div class="owl-item cta_item text-center">
								<div class="cta_background" style="background-image:url(images/home_slider.jpg)"></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title"></div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text"></p>
								<div class="button cta_button"></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelGuide</a></div>
							</div>
							<p class="footer_about_text">Travel Guide is an experienced travel information company. We work with you to provide all information of your travel in an efficient, cost effective and ethical manner.</p>
							
						</div>
					</div>
				</div>

				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Social Media</div>
						<div class="footer_content footer_social">
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- Footer Column -->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">13B-Brahmosh, Kalawad road, Rjkot (Gujrat).</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">travelguide@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.TravelGuide.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://travelguide.com" target="_blank">TravelGuide</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="#">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">packages</a></li>
								<li class="footer_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>