<?php 
require_once("conex.php");
if ($_POST) {
	$nombre=$_POST['nombre'];
	var_dump($_POST);
		$email=$_POST['email'];
		$pw=$_POST['pw'];
		$query='SELECT * FROM users WHERE usuario=?';
		$aux=$conex->prepare($query);
		$aux->execute(array($email));
		$auxx=$aux->fetchColumn();
	if($auxx!=0){
		echo'<script type="text/javascript">
    alert("ya existe el email");
    window.location.href="index.php";
    </script>';
		
	}else{
		$query='INSERT INTO users(nombre, usuario, password) VALUES(?,?,?)';
		$insert= $conex->prepare($query);
		$insert->execute( array($nombre, $email, $pw));
		header('location:index.php');
	}
	//var_dump($auxx);
	
}
 ?>