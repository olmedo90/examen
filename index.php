
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<title>login</title>
</head>
<body>
<div class="container">
    <form method="post" action="control.php">
        <div id="div_login">
            <h1>E-Comerce Simple</h1>
            <div>
                <input type="email" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
            <br>
            <a href="usuarios.php">Registrar Usuario</a>
        </div>
    </form>
</div>
</body>
</html>