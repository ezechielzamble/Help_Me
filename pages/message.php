<?php
//include 'functions/main.func.php';
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
<link rel="stylesheet" type="text/css" href="styles/message.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
</head>
<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/message.func.js"></script>
	

	

	<!-- Blog -->

	
			
				
				<!-- Blog Posts -->
				
					
							

							<?php 
							if (!isset($_GET['user']) || isLogged() ==0 || user_exist() != 1) {
        							header('location:bim.php?page=home');
        						}     
        							$_SESSION['user'] = $_GET['user'];
								
							foreach (get_user() as $user){

								
							?>
							
							
							<br><br><br><br><br>
								<h2 style="text-align: center;">En ligne avec <?= $user->nom; ?></h2>						
									<div class="messages-box">
										<div class="message message-membre">11111111111111</div><br>
										<div class="message message-user">222</div><br>
										<div class="message message-user">2222222222222222</div><br>
										<div class="message message-user">2222222222222222</div><br>
										<div class="message message-membre">11111111111111</div><br>
										<div class="message message-user">2222222222222222</div><br>
									</div>
									<div class="bottom">
										<div class="field field-area">
											<label for="message" class="field-label">Votre message</label>
											<textarea name="message" id="text" rows="2" class="field-input field-textarea"></textarea>
										</div>
										<!-- <button id="send" class="send" type="submit"> -->
											<button class="" id="envoi" type="submit" style="width: 70px; outline: none; ">send
											<span class="i-send"></span>
										</button>
									</div>
	
										<?php
										

}?>	

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/message.func.js"></script> -->

		
	


	