<?php 
require_once('conex.php');
if ($_POST) {
	//var_dump($_POST);
	$telefono=$_POST['telefono'];
	$detalle=$_POST['detalle'];
	$nombre=$_POST['nombre'];
	$precio=$_POST['precio'];
	$imgCargar=($_FILES['img']['tmp_name']);
	$img=fopen($imgCargar, 'rb');
	
	$query='INSERT INTO productos (telefono, detalle, nombre, precio, imagen) VALUES (:telefono, :detalle, :nombre, :precio, :imagen)';
	$insert= $conex->prepare($query);
	$insert->bindParam(':telefono', $telefono, PDO::PARAM_STR);
	$insert->bindParam(':detalle', $detalle, PDO::PARAM_STR);
	$insert->bindParam(':nombre', $nombre, PDO::PARAM_STR);
	$insert->bindParam(':precio', $precio, PDO::PARAM_STR);
	$insert->bindParam(':imagen', $img, PDO::PARAM_LOB);
	$insert->execute();
	var_dump($insert);
	header('location:producto.php');
}
 ?>