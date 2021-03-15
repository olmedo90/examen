<?php 
require_once('conex.php');
if($_POST){
	//var_dump($_POST);
	$nombre=$_POST['name'];
	$email=$_POST['email'];
	$pw=$_POST['pw'];
	$id=$_POST['id'];

	$query='UPDATE users SET nombre=?, usuario=?, password=? WHERE id=?';
	$set= $conex->prepare($query);
	$set->execute(array($nombre, $email, $pw, $id));
	header('location: usuario.php');
}
 ?>