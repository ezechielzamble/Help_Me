<?php
$bdd = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));


 if (!empty($_FILES)){
    $file_name = $_FILES['fichier']['name'];
    $file_extension = strchr($file_name, ".");

    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $file_dest = 'C:/wamp64/www/bhost/doc_charge/'.$file_name;


    $extensions_autorisees = array('.pdf','.PDF');

    if (in_array($file_extension, $extensions_autorisees)){
      if (move_uploaded_file($file_tmp_name, $file_dest)) {
        
        $reponse = $bdd->prepare('INSERT INTO upload(nom, url) VALUES(?,?)');
        $reponse->execute(array($file_name, $file_dest));

         

        $message='Fichier envoyé avec succès';
        //header('location: sender.php');
      } else {
        $message="Une erreur est survenue lors de l'envoi du fichier";
      }
    }else {
      $message='Seuls les fichiers PDF sont autorisés';
    }
    $reponse2 = $bdd->prepare('INSERT INTO sender VALUES(NULL, :nom_parc, :nom_niv)');
	     $reponse2->bindValue(':nom_parc', $_POST['ecoles'], PDO::PARAM_STR);
         $reponse2->bindValue(':nom_niv', $_POST['cycles'], PDO::PARAM_STR);
    	 $reponse2->execute();
  }else{
  //$message='Selectionner un fichier';
  } 



$statement = $bdd->prepare('SELECT * FROM niveau');
 $statement1 = $bdd->prepare('SELECT * FROM parcours');
 if ($statement->execute() and $statement1->execute());
 $niveau = $statement->fetchAll(PDO::FETCH_OBJ);
 $parcours = $statement1->fetchAll(PDO::FETCH_OBJ);

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
						<div class="section_title"><h2>LISTE DES DOSSIERS</h2></div>
						<div class="section_subtitle">Chaque dossier contient les annales, les cours ainsi que des tests (Quizz)</div>
					</div>
				</div>
				
			</div>
							<div style="text-align: center;">
							<?php
                            if(isset($message))
                            {
                                echo '<font color="red">'.$message."</font>";
                            }
                            ?>
                        </div>
			<form method="GET">
			<div class="row why_row">
				
					
				
				<!-- Why Item -->
				

				
				<div class="col-lg-4">
					<div class="icon_box_1 text-center" data-toggle="tooltip" title="Ce dossier contient tous les annales de la L2 MIAGE"><div class="icon_box_1_title">L2 MIAGE</div>
						<div class="icon_box_1_image ml-auto mr-auto" style="width: 35%;"><a href="bim.php?page=liste&id=2" ><img src="images/folder1.png" alt="https://www.flaticon.com/authors/srip"></a></div>
						
						<div class="icon_box_1_text">
							
						</div>
					</div>
				</div>

				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center" data-toggle="tooltip" title="Ce dossier contient tous les annales de la L3 MIAGE"><div class="icon_box_1_title">L3 MIAGE</div>
						<div class="icon_box_1_image ml-auto mr-auto" style="width: 35%;"><a href="bim.php?page=liste&id=3"><img src="images/folder1.png" alt="https://www.flaticon.com/authors/srip"></a></div>
						
						<div class="icon_box_1_text">
							
						</div>
					</div>
				</div>

				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center" data-toggle="tooltip" title="Ce dossier contient tous les annales de la M1 MIAGE"><div class="icon_box_1_title">M1 MIAGE</div>
						<div class="icon_box_1_image ml-auto mr-auto" style="width: 35%;"><img src="images/folder1.png" alt="https://www.flaticon.com/authors/srip"></div>
						
						<div class="icon_box_1_text">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p> -->
						</div>
					</div>
				</div>

				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center" data-toggle="tooltip" title="Ce dossier contient tous les annales de la M2 MIAGE"><div class="icon_box_1_title">M2 MIAGE</div>
						<div class="icon_box_1_image ml-auto mr-auto" style="width: 35%;"><img src="images/folder1.png" alt="https://www.flaticon.com/authors/srip"></div>
						
						<div class="icon_box_1_text">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p> -->
						</div>
					</div>
				</div>

				<!-- Why Item -->
				<div class="col-lg-4">
					<div class="icon_box_1 text-center" data-toggle="tooltip" title="Liste et contacts des entreprises, themes de stages etc..."><div class="icon_box_1_title">STAGES</div>
						<div class="icon_box_1_image ml-auto mr-auto" style="width: 35%;"><img src="images/stages.png" alt="https://www.flaticon.com/authors/srip"></div>
						<div class="icon_box_1_text">
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat.</p> -->
						</div>
					</div>
				</div>
				<!-- Why Item -->
				<div class="col-lg-4">
					<a href="" data-toggle="modal" data-target="#myModal">
					<div class="icon_box_1 text-center" data-toggle="tooltip" title="Partager un fichier"><div class="icon_box_1_title">SHARE DOC</div>
						<div class="icon_box_1_image ml-auto mr-auto" style="width: 35%;"><img src="images/share.svg" alt="https://www.flaticon.com/authors/srip"></div>
						</a>
						
					</div>
				</div>

				</div>
	</form>

				<!-- Modal -->
<!-- <div id="partage" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg"> -->

    <!-- Modal content-->
    <!-- <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      
      <div class="modal-body">
      <-- 	<?php// foreach ($don as $q){ ?> --> 
      	<!-- <div class="row why_row">
      		<div class="col-lg-4">
					
						</div> -->
				<!-- 	</div>
				</div>
			</div>
			<?php
			//echo($_GET['id']);
			?> -->
        <!-- <p>Some text in the modal.</p> -->
    
      <!-- </div> -->
 <!--   <?php //}
 
?> -->
      <!-- <?php //endforeach ?>  -->
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> -->
             <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title">SHARE DOC</h4>
          <button type="button" class="close" style="outline: none;" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
        	<h4 style="text-align: center;">Selectionnez le <strong>parcours</strong> et le <strong>niveau</strong> dans lequel vous souhaitez transferer le fichier</h4>
<form class="form-horizontal" method='post' enctype="multipart/form-data" action="">
    <!-- <div class="form-group">
      <label class="control-label col-sm-4" for="nom_contact">Nom complet:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Ex: ezechiel zamble" name="nom_contact" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="promotion">Promotion:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Ex: STIC 2018-2019" name="promotion" required>
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-4" for="ecoles">Parcours:</label>
      <div class="col-lg-10">
      <select class="form-control" name="ecoles" id="ecoles" required="required">
        						<option value='0'>Parcours</option>
        						<?php
        							foreach ($parcours as $parc) {
          								if($parc->nom_parc == $parcours)
          								echo "<option value='$parc->nom_parc' selected>$parc->nom_parc</option>";
          								else
           							    echo "<option value='$parc->nom_parc'>$parc->nom_parc</option>";
        									}
        						?>
      						</select>
      </div>
      </div>

      <div class="form-group">
      <label class="control-label col-sm-4" for="cycles">Niveau:</label>
      <div class="col-lg-10">
      <select class="form-control" name="cycles" id="cycles" required="required">
        						<option value='0'>Niveau</option>
        						<?php
        							foreach ($niveau as $niv) {
          								if($niv->id_niv == $niveau)
          								echo "<option value='$niv->nom_niv' selected>$niv->nom_niv</option>";
          								else
           							    echo "<option value='$niv->nom_niv'>$niv->nom_niv</option>";
        									}
        						?>
      						</select>
      </div>
      </div>
      <!-- <div class="form-group">
      <label class="control-label col-sm-4" for="num_contact">Contact(s):</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="Ex: +22509000009/+22503000003" name="num_contact" required>
      </div>
    </div> -->

      <div class="form-group">        
        <div class="col-sm-offset-4">
        <input style="outline: none;" type="file" name="fichier">
        <!-- <input type="file" name="id_doc"> -->
        <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-default">Envoyer</button>
        </div>
      </div>
      </div>

    </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>
  </div>
</div>


			</div>
		</div>
	</div>
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	<?php
    include'footer.php';
   ?>