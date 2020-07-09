<?php
//alert("ok");
include'../functions/main.func.php';
//$objetPdo = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));
// if(isset($_POST['search']) && !empty($_POST['search']))
// {
// 	$search = htmlspecialchars((htmlentities($_POST['search'])));
// 	$query = $objetPdo->query("SELECT nom FROM users WHERE nom LIKE '$search%' ");
// 	$query =$query->fetchAll();
// foreach ($query as $q) {
// 	echo"<li><a href=''>".$q['nom']."</a></li>";	
// }
// }


if(isset($_POST['search']) && !empty($_POST['search']))
{		global $search;
	global $query;
	 $search = htmlspecialchars((htmlentities($_POST['search'])));
	 $query = $objetPdo->query("SELECT * FROM documents WHERE nom_niv LIKE '$search%' LIMIT 5");
	$query =$query->fetchAll();
foreach ($query as $q) {
	echo"<li><a href=''>".$q['nom_niv'],' ',$q['nom_parc'],' ', $q['nom']."</a></li>";	
 }
	$query = $objetPdo->query("SELECT * FROM documents WHERE nom_parc LIKE '$search%' LIMIT 5");
	$query =$query->fetchAll();
foreach ($query as $q) {
	echo"<li><a href=''>".$q['nom_niv'],' ',$q['nom_parc'],' ', $q['nom']."</a></li>";
}
// $query = $objetPdo->query("SELECT * FROM documents WHERE nom LIKE '$search%' LIMIT 5");
// 	$query =$query->fetchAll();
// foreach ($query as $q) {
// 	echo"<li><a href=''>".$q['nom_niv'],' ',$q['nom_parc'],' ', $q['nom']."</a></li>";
// }
}

if (isset($_POST['lien']) && !empty($_POST['lien'])) {
	$lien = htmlspecialchars((htmlentities($_POST['lien'])));
	$query = $objetPdo->query("SELECT * FROM documents WHERE nom='$lien'");
	$query =$query->fetchAll();
foreach ($query as $q) {
	echo"<li><a href=''>".$q['nom_niv'],' ',$q['nom_parc'],' ', $q['nom'],' ', $q['url']."</a></li>";
}
}