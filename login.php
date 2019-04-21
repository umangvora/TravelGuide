<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/login.css">
</head>

<body>
<div class="super_container">
	<div class="contact_form_section">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Contact Form -->

					<div class="contact_form_container">
						<div class="contact_title text-center">Login</div>
						<form action="validation.php" method=post id="contact_form" class="contact_form text-center">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" name="user" data-error="Email is required.">
							<input type="Password" name="password" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Password" required="required" data-error="Subject is required."><br>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">login</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://colorlib.com" target="_blank">TravelGuide</a>
						</div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="index.html">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
</body>
</html>