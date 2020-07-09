<?php
function user_exist(){
	global $objetPdo;
	$e = array('user' =>$_GET['user'], 'session'=>$_SESSION['email']);
	$sql = "SELECT * FROM users WHERE email =:user AND email !=:session";
	$req = $objetPdo->prepare($sql);
	$req->execute($e);
	$exist = $req->rowCount($sql);
	return $exist;
}

function get_user(){
	global $objetPdo;
	$req = $objetPdo->query("SELECT * FROM users WHERE email ='".$_SESSION['user']."'");
	
	$user = array();
	while($row = $req->fetchObject()){
		$user[] = $row;
	}
	return $user;
}