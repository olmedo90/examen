<?php 
require_once('conex.php');
if($_GET['id']){
	$id=$_GET['id'];
	//var_dump($id);
	$query='SELECT * FROM users WHERE id=?';
	$user=$conex->prepare($query);
	$user->execute(array($id));
	$users= $user->fetch();
	//var_dump($users);

}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
 	<form action="updateUser.php" method="POST">
 		<label for="name">nombre</label>
           <input type="text" name="name" id="name" value=" <?php echo $users['nombre']; ?> "> <br>
           <label for="email">Correo Electronico</label>
           <input type="email" name="email" id="email" value=" <?php echo $users['usuario']; ?> "> <br>
            <label for="pw">Contraseña</label>
           <input type="text" name="pw" id="pw" value=" <?php echo $users['password']; ?> "> <br><br>
           <input type="hidden" name="id" value=" <?php echo $users['id']; ?> ">
          <input type="submit" value="REGISTRAR">
          <input type="reset" value=" Cancelar">
       </form>
	
</body>
</html>