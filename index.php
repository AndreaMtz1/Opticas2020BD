<!DOCTYPE html>
<html>
<head>
	<title>Registrar cliente</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de Clientes</h1>
    	<input type="text" name="Nombre" placeholder="Nombre">
		<input type="text" name="Apellido" placeholder="Primer apellido">
		<input type="text" name="Telefono" placeholder="Teléfono">
    	<input type="email" name="Correo" placeholder="Correo electrónico">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("clientes.php");
        ?>
</body>
</html>