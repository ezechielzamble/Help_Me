<?php


$bdd = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));

       
        $reponse = $bdd->prepare('INSERT INTO sender VALUES(NULL, :nom_parc, :nom_niv)');


        $reponse->bindValue(':nom_parc', $_POST['ecoles'], PDO::PARAM_STR);
        $reponse->bindValue(':nom_niv', $_POST['cycles'], PDO::PARAM_STR);
    
        $insertIsOk = $reponse->execute();
        if ($insertIsOk) {
          echo 'Le contact a été ajouté';
        }
        else
        {
          echo "Echec de l'insertion";
        }