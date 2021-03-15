<?php 
session_start();
$link='mysql:host=localhost; dbname=login;';
$user='root';
$pw='';
try {
	$conex= new PDO($link, $user, $pw);
} catch (PDOException $e) {
	print("error de conexio".$e->getmessage());
}

 ?>