<?php
  $objetPdo = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));
  $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
global $objetPdo;
  
 		$query = 'SELECT * FROM users';
        $statement=$objetPdo->query($query);
        $donnees = $statement->fetchAll();


?> 
 		              
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>

	

	

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row blog_row">
				
				<!-- Blog Posts -->
				<div class="col-lg-8">
					<div class="blog_posts">

						<!-- Blog Post -->
						<div class="blog_post">
							

				
							
							<div class="blog_post_image">					
	
	
								<img src="images/blog_1.jpg" alt="https://unsplash.com/@sapegin">
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">How to choose a good plan?</a></div>
								<div class="blog_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#">July 12, 2018</a></li>
										<li><a href="#">By Admin</a></li>
										<li><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies. In a leo vel dolor tempor feugiat. Cras accumsan faucibus magna a imperdiet.</p>
								</div>
							</div>
						</div>

						

						<!-- Blog Post -->
						
					</div>
					
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Sidebar Search -->
						<div class="search_form_container">
							<form action="#" id="search_form" class="search_form">
								<input type="text" class="search_input" required="required">
								<button class="search_button">Search</button>
							</form>
						</div>

						<!-- Categories -->

							<div class="categories">
							<div class="sidebar_title">Liste des membres</div>
							<div class="categories_list">

						<?php foreach ($donnees as $donnee){
							if ($donnee['email'] != $_SESSION['email']) {
						?>
						
								<ul>
									<li>
										<a class="select" href="bim.php?page=message&user=<?= $donnee['email'] ?>">
										<div class="d-flex flex-row align-items-start justify-content-start">
									<div>
											<strong><?= $donnee['nom']; ?>
											
										</strong>
									</div>
										<div class="ml-auto">
												<span>
												<?= $donnee['email']; ?>
												</span>
										</div>
										</div>
										</a>
									</li>
								</ul>	



		
			<!-- <div>
				<strong><?= $donnee['nom']; ?></strong><br>
				<span><?= $donnee['email']; ?></span><br>
				<a class="select" href="bim.php?page=tchat&user=<?= $donnee['email'] ?>"><span class="fa fa-user"></span></a>
			</div> -->

								


		<?php
	}
}
?>
								
							</div>
						</div>


						

					</div>
				</div>
			</div>
		</div>
	</div>


		
	


	