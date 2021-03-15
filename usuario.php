<?php 
require_once("conex.php");
$query='SELECT * FROM users';
$list= $conex->prepare($query);
$list->execute();
$users=$list->fetchAll();
//var_dump($users);
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>usuarios</title>
 </head>
 <body>
 	<div>
	 	<ul>
	        <li><a href="usuarios.php">nuevo registro</a></li>
	        <li><a href="#">Atras</a></li>
	    </ul>
 	</div>
 	<table border="2px">
 		<thead>
 			<tr>
 				<th>nombre</th>
 				<th>Correo Electronico</th>
 				<th>Contraseña</th>
 				<th>Acciones</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($users as $user): ?>
 			<tr>
 				<td> <?php echo $user['nombre']; ?></td>
 				<td> <?php echo $user['usuario']; ?></td>
 				<td> <?php echo $user['password']; ?></td>
 				<td>
 					<a href="EditUser.php?id= <?php echo$user['id']; ?>">Editar</a>
 					<a href="deleteUser.php?id= <?php echo $user['id']; ?>">Eliminar</a>
 				</td>
 			</tr>
 				
 			<?php endforeach ?>
 			
 		</tbody>
 		<caption >
 			Usuarios 
 		</caption>
 	</table>
 	
 </body>
 </html>