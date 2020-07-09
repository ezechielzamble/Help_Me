<?php

function email_taken($email){
	global $objetPdo;
	$e = array('email' => $email);
	$sql = 'SELECT * FROM users WHERE email = :email';
	$req = $objetPdo->prepare($sql);
	$req->execute($e);
	$free = $req->rowCount($sql);
	return $free;
}

