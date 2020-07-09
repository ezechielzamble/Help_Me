<?php
session_start();
try
{
  $objetPdo = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));
  $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_POST["signin"]))
  {
  		$email = htmlspecialchars($_POST['email']);
        $pass = sha1($_POST['motdepasse']);
      if(empty($_POST["email"]) || empty($_POST["motdepasse"]))
      {
        $message = '<label>Tous les champs sont requis !</label>';
      }
      else
      {
        $query = ("SELECT * FROM users WHERE email = ? AND motdepasse = ?");
        $statement = $objetPdo->prepare($query);
        $statement->execute(
              array(
              		$email, $pass
                    // '?' => $_POST["email"],
                    // '?' => $_POST["motdepasse"]
                  )
            );
            $count = $statement->rowCount();
            if ($count > 0)
            {
            	$userinfo = $statement->fetch();
            	$_SESSION['id'] = $userinfo['id_user'];
            	$_SESSION['nom'] = $userinfo['nom'];
                $_SESSION["email"] = $userinfo["email"];
                //header("location:index.php?id=".$_SESSION['id']);
                header("location:bim.php?page=home");

            }
            else
            {
                $message ='<label>données incorrecte !</label>';
            }
      }
  }
}
catch(PDOException $error)
{
  $message = $error->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Se connecter</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header trans_400">
		<div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
			<div class="logo"><a href="#"><span>Help</span>me !</a></div>
			<!-- <div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-2">
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About us</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="blog.html">News</a></li>
								<li class="active"><a href="contact.html">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div> -->
			<div class="header_right d-flex flex-row align-items-center justify-content-start">

				<!-- Header Links -->
				<div class="header_links">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.php">Accueil</a></li>
						<!-- <li><a href="#">Chat</a></li>
						<li><a href="#">Login</a></li> -->
					</ul>
				</div>
					<div class=""><a><span>Se Connecter !</span></a></div>
				<!-- Phone -->
				<!-- <div class="phone d-flex flex-row align-items-center justify-content-start">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<div>652-345 3222 11</div>
				</div> -->

				<!-- Hamburger -->
				<!-- <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div> -->	
		</div>
	</header>

	<!-- Menu -->

	<!-- <div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<div class="menu_nav trans_500">
				<ul class="text-center">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="phone menu_phone d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>652-345 3222 11</div>
			</div>
		</div>
	</div> -->

	<!-- Home -->

	<!-- <div class="home">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_image"><img src="images/contact.png" alt=""></div>
						<div class="home_title">Se Connecter</div>		
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
									<div class="domain_search_selected">.com</div>
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
	</div> -->

	<!-- Domain Pricing -->

	<!-- <div class="domain_pricing">
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
	</div> -->

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				
				<!-- Contact Info -->
				<!-- <div class="col-lg-4">
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
				</div> -->

				<!-- Contact Form -->
				<div class="col-lg-6 offset-lg-4 contact_form_col">
					<div class="contact_form_container"><br/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<form class="contact_form" id="contact_form" method="POST">
							<div class="">
								<div class="col-lg-6"><input type="email" class="contact_input" name="email" placeholder="votre identifiant" required="required"></div><br>
																
								<div class="col-lg-6"><input type="password" class="contact_input" name="motdepasse" placeholder="votre mot de passe" required="required"></div><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Register.php">Pas encore de compte</a>
								
							</div>
                            	<?php
                            if(isset($message))
                            {
                                echo '<font color="red">'.$message."</font>";
                            }
                            ?>
                            <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="contact_button trans_200" type="submit" name="signin">Se Connecter</button>
						</form><br>
						
					</div>
				</div>
			</div>
				<!-- <br><br><br><br><br><br>
			<?php
				//include_once('footer.php');
			?> -->