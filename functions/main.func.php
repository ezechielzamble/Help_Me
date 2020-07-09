<?php
//session_start();
try
{
  $objetPdo = new PDO('mysql:host=localhost;dbname=help_me','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES'utf8'"));
  $objetPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
}
catch(PDOException $error)
{
  $message = $error->getMessage();
}

function isLogged(){

if (isset($_SESSION['email'])){
	$logged = 1;
}else{
	$logged = 0;
}
return $logged;
}