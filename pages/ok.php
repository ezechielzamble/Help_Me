<?php
  include('../bhost/functions/main.func.php');
global $objetPdo;
  
 		$query = 'SELECT * FROM users';
        $statement=$objetPdo->query($query);
        $donnees = $statement->fetchAll();
        if(isset($_POST['submit'])){
        	echo('ok');

        }


?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/styles.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
<div class="container"><br/ ><br/ ><br/ ><br/ ><br><br>

<form class="col-sm-6 form-horizontal" method='post' enctype="multipart/form-data" action="">
    <div class="form-group">
      <label class="control-label col-sm-4" for="nom_contact">Nom complet:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Ex: ezechiel zamble" name="nom_contact">
        <textarea class="form-control" id="message" name="message"></textarea>
      </div>
    </div>


      <div class="form-group">        
        <div class="col-sm-offset-4">
        
        <!-- <input type="file" name="id_doc"> -->
        <div class="d-flex justify-content-end">
                <button type="submit" id="send" class="btn btn-default">PARTAGER</button>
        </div>
      </div>
      </div>

    </form>

<!-- <h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar" id="search" placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
                <div id="resultat">
                	<ul>
                		
                	</ul>
                </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                	<!-- <?php 
							//if (!isset($_GET['user']) || user_exist() != 1) {
        						//	header('location:bim.php?page=home');
        						//}     
        							$_SESSION['user'] = $_GET['user'];
								
							//foreach (get_user() as $user){

								
							?> -->
                  <!-- <h5><?= $user->nom; ?><span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div> -->
     <!--        <?php
										

//}?>	 -->
          
          </div>
        <!-- </div>
       
        <div class="mesgs">
        	 <form>
          <div class="msg_history">
          	
           
          </div>
          <div class="type_msg">
            <div class="input_msg_write" >
              <!-- <input type="text" id="message" class="write_msg" placeholder="Type a message" /> -->
             <!--  <input type="text" id="message" class="input" placeholder="Type a message" />
              <input value="send" type="submit">
            </div>
          </div>
      </form>
        </div>
      </div> -->
      
      
     <!-- <p class="text-center top_spac"> Design by <a target="_blank" href="#">Sunil Rajput</a></p>
      <!-- 
    </div> --></div>

</body>
</html>

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
<!-- <script src="js/test.func.js"></script> -->

</body>
</html> 		              
	