<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen(trim($_POST['Nombre'])) >= 1 && 
		strlen(trim($_POST['Apellido'])) >= 1 && 
		strlen(trim($_POST['Telefono'])) >= 1 && 
		strlen(trim($_POST['Correo'])) >= 1) 
	{
	    $nombre = trim($_POST['Nombre']);
		$apellido = trim($_POST['Apellido']);
	    $telefono = trim($_POST['Telefono']);
		$correo = trim($_POST['Correo']);

	    $consulta = "INSERT INTO Clientes(Nombre, Apellido, Telefono, Correo) VALUES ('$nombre','$apellido','$telefono','$correo')";

	    $resultado = mysqli_query($conex, $consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Se ha añadido el cliente satisfactoriamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>