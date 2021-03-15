<?php 
require_once('conex.php');
$query='SELECT * FROM productos';
$audio=$conex->prepare($query);
$audio->execute();
//var_dump($audio);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Audio</title>
</head>
<body>
  <div><h1>REGISTRAR PRODUCTO</h1></div>
  <form method="POST" action="upload.php" enctype="multipart/form-data"><br>
    <label for="telefono">Telefono</label>
    <input type="text" name="telefono" id="telefono"><br>
     <label for="detalle">Detalle</label>
    <input type="text" name="detalle" id="detalle"><br>
     <label for="nombre">Nombre de Usuario De publicacion</label>
    <input type="text" name="nombre" id="nombre"><br>
     <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio"><br><br>
  <label for="img">Imagen</label><br>
  <input type="file" name="img" ><br><br>
  
 
    <input type="submit" name="uploadBtn" value="CArgar Producto" />
    <input type="reset" name="reset" value="Cancelar">
  </form>
  <div>
    <h1>Lista de Productos</h1>
    <table border="2px">
    <tr>
      <th>Detalle </th>
      <th>Nombre de usuario publicado  </th>
      <th> Precio </th>
      <th>Fecha</th>
      <th>Imagen</th>
    </tr>
    <?php 
      while ($listaudio=$audio->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
          <th><?php echo $listaudio['detalle']; ?> </th>
          <th><?php echo $listaudio['nombre']; ?></th>
          <th> <?php echo $listaudio['precio']; ?></th>
          <th> <?php $hoy = getdate(); print_r($hoy['hours'].':'.$hoy['minutes']); ?></th>
        </tr>
        <?php
        echo '
          <tr>
            <td> <img  width="100" height="100" src="data:image/png;base64, '.base64_encode($listaudio['imagen']).'">
            </td>
          </tr>
        ';
        # code...
      }
    ?>
  </table>  
  </div>
</body>
</html>