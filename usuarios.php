

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroGmail</title>
</head>
<body>
    <h1>registro de usuarios</h1>
   <div>
        <ul>
       
       
        <li><a href="index.php">Atras</a></li>
    </ul>
   </div>
   <div>
       <form action="createuser.php" method="POST">
        <label for="pw">Nombre Completo</label>
           <input type="text" name="nombre" id="nombre"> <br><br>
           <label for="email">Correo Electronico</label>
           <input type="email" name="email" id="email"> <br>
            <label for="pw">Contraseña</label>
           <input type="password" name="pw" id="pw"> <br><br>
          
          <input type="submit" value="REGISTRAR">
          <input type="reset" value=" Cancelar">
       </form>
   </div>
  
   
</body>
</html>