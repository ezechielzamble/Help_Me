<?php
session_start();
if (isset($_SESSION["nom"]))
{
	echo '<h3>Vous êtes connecté(e), Bonjour - '.$_SESSION["nom"].'</h3>';
	echo '<br /><br /><a href="deconnexion.php">Deconnexion';
}
else
{
	header("location:login.php");
}




?>