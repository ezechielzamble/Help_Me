<?php
 include 'functions/main.func.php';
session_start();
 $pages = scandir('pages/');
 //print_r($pages);
 if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages))
 	{
 		//echo "ok";
 		$page = $_GET['page'];
 	}else
 	{
 		//echo "non";
 		$page = '../bim';
 	}

  $pages_function = scandir('functions/');
  if(in_array($page.'.func.php', $pages_function))
  {
  	include 'functions/'.$page.'.func.php';
  }	
 
$pages_js = scandir('js/');
if(in_array($page.'.func.js', $pages_js))
  {
  ?> 
  <script src="js/<?= $page ?>.func.js"></script> 
 <?php }	
?>
	
<!DOCTYPE html>
<html lang="fr">
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

<div class="super_container">
	
	<!-- Header -->
   <?php
    include'body/topbar.php';
   ?>
		
    <?php
   include'pages/'.$page.'.php';
   ?> 

  <!-- Footer -->
	
