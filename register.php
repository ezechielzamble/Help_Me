<?php
session_start();

	$bdd = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));


$statement = $bdd->prepare('SELECT * FROM niveau');
 $statement1 = $bdd->prepare('SELECT * FROM parcours');
 if ($statement->execute() and $statement1->execute());
 $niveau = $statement->fetchAll(PDO::FETCH_OBJ);
 $parcours = $statement1->fetchAll(PDO::FETCH_OBJ);

if (isset($_POST['signin']))
{
		$pdoStat = $bdd->prepare('INSERT INTO users VALUES(NULL, :email, :nom, :motdepasse, :ecoles, :cycles)');
		$mail = $pdoStat->bindValue(':email', htmlspecialchars($_POST['email']), PDO::PARAM_STR);
        $nm = $pdoStat->bindValue(':nom', htmlspecialchars($_POST['nom']), PDO::PARAM_STR);
        $mdp = $pdoStat->bindValue(':motdepasse', sha1($_POST['motdepasse']), PDO::PARAM_STR);
        //$mdp2 = $pdoStat->bindValue(':motdepasse2', sha1($_POST['motdepasse2']), PDO::PARAM_STR);
        $ec = $pdoStat->bindValue(':ecoles', $_POST['ecoles'], PDO::PARAM_STR);
        $cy = $pdoStat->bindValue(':cycles', $_POST['cycles'], PDO::PARAM_STR);
        if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['motdepasse']) AND !empty($_POST['motdepasse2']) AND !empty($_POST['ecoles']) AND !empty($_POST['cycles']))
        {
        		$namelength = strlen($nm);
        		if ($namelength <= 30)
        		{
        			 if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        			 {
        				$reqmail = $bdd->prepare('SELECT * FROM users WHERE email = ?');
  		                $reqmail->execute(array($mail));
  		                $mailexist = $reqmail->rowCount();
                       if($mailexist == 0)
                       {
                       	if ($_POST['motdepasse2'] == $_POST['motdepasse'])
                       	{
                       		 //$message = 'ok';
                       		 $insertIsOk = $pdoStat->execute();
        					if ($insertIsOk)
        					 {
         						 $message = 'vous venez de creer un compte';
        					 }
       						 else
        					{
         						 $message = "echec de l'insertion";
        					}	
                       	}else
                       	{
                       		$message = "mots de passe différent !";
                       	}
                       }else
                       {
                       	$message = "adresse mail déjà utilisée !";
                       }
        			}else{
        				$message = "adresse mail invalide !";
        			}
        		}else
        		{
        			$message = "votre nom est trop long !";
        		}
        
    	} else
     			{
      			   $message = "Tous les champs doivent etre renseignés !";
    			}
		// $name = htmlspecialchars($_POST['nom']);
  //       $email = htmlspecialchars($_POST['email']);
  //       $pass = sha1($_POST['motdepasse']);
  //       $re_pass = sha1($_POST['motdepasse2']);
  //       $parc = ($_POST['ecoles']);
  //       $niv = ($_POST['cycles']);

  //       if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['motdepasse']) AND !empty($_POST['motdepasse2'])) {
  //       	$namelength = strlen($name);
        
  //       if ($namelength <= 255)
  //       {
  //       	if(filter_var($email, FILTER_VALIDATE_EMAIL))
  //           {
  //               $reqmail = $bdd->prepare("SELECT * FROM membres WHERE email_m = ?");
  //               $reqmail->execute(array($email));
  //               $mailexist = $reqmail->rowCount();
  //               if($mailexist == 0)
  //               {

  //           if ($pass == $re_pass)
  //           {
  //               $pdoStat = $bdd->prepare("INSERT INTO membres (email_m, nom_m, motdepasse_m, parcours_m, niveau_m) VALUES (?, ?, ?,) ");
            
  //       // $pdoStat->bindValue(':email_m', $_POST['email'], PDO::PARAM_STR);
  //       // $pdoStat->bindValue(':nom_m', $_POST['nom'], PDO::PARAM_STR);
  //       // $pdoStat->bindValue(':motdepasse_m', $_POST['motdepasse'], PDO::PARAM_STR);
  //       // $pdoStat->bindValue(':parcours_m', $_POST['ecoles'], PDO::PARAM_STR);
  //       // $pdoStat->bindValue(':niveau_m', $_POST['cycles'], PDO::PARAM_STR);
  //               $pdoStat->execute(array($email, $nom, $pass));

  //               $message = "Votre compte à bien été crée !";
  //           }
  //           else
  //           {
  //               $message = "Vos mots de pass ne correspondent pas !";
  //           }

  //           }
  //           else
  //               {
  //                   $message = "Adresse mail déjà utilisée !";
  //                  // $message = "Nom d'utilisateur déjà utilisé !";
  //               }
  //           }
  //           else
  //           {
  //               $message = "Adresse mail invalide !";
  //           }
  //       }
  //       else
  //       {
  //           $message = "nom trop long";
  //       }
  //   }
  //       else
  //   {
  //       $message = "Tous les champs doivent etre renseignés !";
  //   }
}

// catch(PDOException $error)
// {
//   $message = $error->getMessage();
// }



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>S'enregistrer</title>
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
					<div class=""><a><span>S'enregistrer !</span></a></div>
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
				<div class="col-lg-8 offset-lg-2 contact_form_col">
					
					<div class="contact_form_container"><br/>
						<form action="" class="contact_form" id="contact_form" method="POST">
							<div class="row contact_row">

								<div class="col-lg-6"><input type="email" class="contact_input" name="email" placeholder="E-mail" ></div><br>
								<div class="col-lg-6"><input type="text" class="contact_input" name="nom" required="required" placeholder="Votre nom" ></div><br>
								
								<div class="col-lg-6"><input type="password" class="contact_input" required="required" name="motdepasse" placeholder="mot de passe" ></div><br>
								<div class="col-lg-6"><input type="password" class="contact_input" required="required" name="motdepasse2" placeholder="confirmer mot de passe" ></div><br>
			
								<div class="col-lg-6">
									<select class="form-control" name="ecoles" required="required">
        						<option value='0'>--Parcours--</option>
        						<?php
        							foreach ($parcours as $parc) {
          								if($parc->id_parc == $parcours)
          								echo "<option value='$parc->id_parc' selected>$parc->nom_parc</option>";
          								else
           							    echo "<option value='$parc->id_parc'>$parc->nom_parc</option>";
        									}
        						?>
      						</select>
								</div><br>
								<div class="col-lg-6">
									<select class="form-control" name="cycles" required="required">
        						<option value='0'>--Niveau--</option>
        						<?php
        							foreach ($niveau as $niv) {
          								if($niv->id_niv == $niveau)
          								echo "<option value='$niv->id_niv' selected>$niv->nom_niv</option>";
          								else
           							    echo "<option value='$niv->id_niv'>$niv->nom_niv</option>";
        									}
        						?>
      						</select>
								</div><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.php">Déjà un compte</a>
							</div>
							<?php
                            if(isset($message))
                            {
                                echo '<font color="red">'.$message."</font>";
                            }
                            ?>
                            <br>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="contact_button trans_200" name="signin" type="submit">S'enregistrer</button>
						</form>
					</div>
				</div>
			</div>
			<!-- <div class="row google_map_row">
				<div class="col"> -->
					
					<!-- Contact Map -->

					<!-- <div class="contact_map"> -->

						<!-- Google Map -->
						
						<!-- <div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<div id="map"></div>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</div> -->
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<!-- <div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
			<div>Need Help? Call Us 24/7</div>
			<div class="d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>652-345 3222 11</div>
			</div>
		</div> -->
		<!-- <div class="footer_content">
			<div class="container">
				<div class="row footer_row">

					<-- Footer Column -->

					<!-- <div class="col-xl-3 col-md-6">
						<div class="footer_title">Hosting Packages</div>
						<div class="footer_list">
							<ul>
								<li><a href="#">Cloud Hosting</a></li>
								<li><a href="#">Web Hosting</a></li>
								<li><a href="#">Reseller Hosting</a></li>
								<li><a href="#">VPS Hosting</a></li>
								<li><a href="#">Dedicated Servers</a></li>
								<li><a href="#">Windows Hosting</a></li>
								<li><a href="#">Linux Servers</a></li>
							</ul>
						</div>
					</div> -->

					<!-- Footer Column -->
					<!-- <div class="col-xl-3 col-md-6">
						<div class="footer_title">Our Services</div>
						<div class="footer_list">
							<ul>
								<li><a href="#">Web Design</a></li>
								<li><a href="#">Logo Design</a></li>
								<li><a href="#">Domains Register</a></li>
								<li><a href="#">Search Advertising</a></li>
								<li><a href="#">Email Marketing</a></li>
							</ul>
						</div>
					</div> -->

					<!-- Footer Column -->
					<!-- <div class="col-xl-3 col-md-6">
						<div class="footer_title">Useful Links</div>
						<div class="footer_list">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div> -->

					<!-- Footer Column -->
					<!-- <div class="col-xl-3 col-md-6">
						<div class="logo footer_logo"><a href="#"><span>b</span>Host</a></div>
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
						<div class="cards">
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li><a href="#"><img src="images/card_1.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_2.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_3.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_4.png" alt=""></a></li>
								<li><a href="#"><img src="images/card_5.png" alt=""></a></li>
							</ul>
						</div>
						<div class="social footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>  -->
			<!-- </div>
		</div> -->
		<div class="copyright_bar text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script> -->
<script src="js/contact.js"></script>
</body>
</html>