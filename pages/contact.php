<?php

  $objetPdo = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));
  $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
 		$query = 'SELECT * FROM users';
        $statement=$objetPdo->query($query);
        $donnees = $statement->fetchAll();

        
?> 	
<!DOCTYPE html>
<html lang="en">
<head>
<title>HelpMe</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>



	<!-- Home -->

	<div class="home">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_image"><img src="images/contact.png" alt=""></div>
						<div class="home_title">Contact</div>		
					</div>
				</div>
			</div>
		</div>
		<div class="domain_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="domain_search">
							<div class="domain_search_background"></div>
							<div class="domain_search_overlay"></div>
							<form action="#" class="domain_search_form" id="domain_search_form">
								<input type="text" class="domain_search_input" placeholder="Your domain name" required="required">
								<div class="domain_search_dropdown d-flex flex-row align-items-center justify-content-center">
									<div class="domain_search_selected"></div>
									<ul>
										<li>.com</li>
										<li>.io</li>
										<li>.net</li>
									</ul>
								</div>
								<button class="domain_search_button">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Domain Pricing -->

	<div class="domain_pricing">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="domain_pricing_content">
						<ul class="d-flex flex-md-row flex-column align-items-center justify-content-md-between justify-content-center">
							<li><a href="#"><span>.</span>com<span>$3.99</span></a></li>
							<li><a href="#"><span>.</span>net<span>$1.99</span></a></li>
							<li><a href="#"><span>.</span>org<span>$2.99</span></a></li>
							<li><a href="#"><span>.</span>io<span>$3.99</span></a></li>
							<li><a href="#"><span>.</span>info<span>$13.99</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info_container">
						<div class="contact_title">Contact Info</div>
						<div class="contact_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat.</p>
						</div>
						<div class="logo contact_logo"><a href="#"><span>b</span>Host</a></div>
						<div class="contact_info">
							<ul>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div>+53 345 7953 32453</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-8 contact_form_col">
					<div class="contact_form_container">
						<div class="contact_title">Get in touch</div>
						<form action="#" class="contact_form" id="contact_form">
							<div class="row contact_row">
								<div class="col-lg-6"><input type="text" class="contact_input" placeholder="Name" required="required"></div>
								<div class="col-lg-6"><input type="email" class="contact_input" placeholder="E-mail" required="required"></div>
								<div class="col-12"><input type="text" class="contact_input" placeholder="Subject" required="required"></div>
								<div class="col-12"><textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
							</div>
							<button class="contact_button trans_200">send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php
		include_once('footer.php');
	}
else
{
	header("location:login.php");
}
?>
		