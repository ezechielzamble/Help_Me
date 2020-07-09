<?php
session_start();
if (isset($_SESSION["id"]))
{
	header("location:accueil.php?id=".$_SESSION['id']);
}
else
{
	header("location:login.php");
}
?>
