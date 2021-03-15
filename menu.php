<?php
require_once('conex.php');


if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}


if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<title>login</title>
</head>
<body>
    <div><h1>E-Comerse Simple</h1></div>
	<div>
     <ul>
         <li><a href="usuario.php">Lista de usuarios</a></li>
         <li><a href="producto.php">Registar Producto</a></li>
     </ul>   
    </div>
    <div></div>
    <div></div>
    <div></div>
</body>
</html>