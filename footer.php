<footer class="footer">
		<!-- <div class="footer_phone d-flex flex-row align-items-center justify-content-sm-end justify-content-center">
			<div>Need Help? Call Us 24/7</div>
			<div class="d-flex flex-row align-items-center justify-content-start">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<div>652-345 3222 11</div>
			</div>
		</div>
		<div class="footer_content">
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
						<div class="footer_info">
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
				</div>
			</div>
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
<script src="js/custom.js"></script>
<?php 
$pages_js = scandir('js/');
if(in_array($page.'.func.js', $pages_js))
  {
  ?> 
  <script src="js/<?= $page ?>.func.js"></script> 
 <?php }	
?>
</body>
</html>