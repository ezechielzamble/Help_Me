<?php
//session_start();
$objetPdo = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));
 $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
global $objetPdo;

	//$lien = htmlspecialchars((htmlentities($_GET['lien'])));
	$query = $objetPdo->query("SELECT * FROM documents");
	$query =$query->fetchAll();

if (isset($_GET['id'])) {
            
           $query='SELECT * FROM documents WHERE id_X='.$_GET['id'];
           $statement=$objetPdo->query($query);
           $donnees = $statement->fetchAll();
           
       }
?>
<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/index.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_icon ml-auto mr-auto d-flex flex-column align-items-center justify-content-center"><div><img src="images/icon_1.svg" alt="https://www.flaticon.com/authors/srip"></div></div>
							<div class="home_title">Rechercher un document</div>
							<div class="domain_search">
								<div class="domain_search_background"></div>
								<form action="#" class="domain_search_form" id="domain_search_form">
									<input type="text" class="domain_search_input" id="search" placeholder="Entrer le nom de la matière ou d'un document" required="required">
									
									<button class="domain_search_button">chercher</button>
								</form>
								<div id="resultat">
                					<ul>
                		
                					</ul>
                				</div>
							</div>
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
							
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Why Choose Us -->

	<div class="why">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h2>Résultat des recherches</h2></div>
						<div class="section_subtitle"></div>
					</div>
				</div>
			</div>
			
			<div class="row why_row">
				<?php foreach ($donnees as $q){ ?>
				<!-- Why Item -->
				

				<div class="col-lg-4">
					<div class="icon_box_1 text-center">
						<div class="icon_box_1_image ml-auto mr-auto" id="lien"><?= '<a href="'.$q['url'].'"><img src="images/pdf.svg" alt="https://www.flaticon.com/authors/srip"></a>';?></div>
						<div class="icon_box_1_title"><?= $q['nom'];?></div>
						<div class="icon_box_1_text"></p>
						</div>
						
						</div>
						<div id="feedback">
							<ul>
								
							</ul>
					</div>
				</div>

				<!-- Why Item -->
				

		<?php
	}

?>
			</div>
		</div>
	</div>
	<?php
    include'footer.php';
   ?>