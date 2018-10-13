<?php
	
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$mensaje=$_POST['mensaje'];

	$destinatario="untoqueweb@gmail.com";
	$asunto="Contacto desde nuestra Web";



	$carta="De: $nombre \r\n";
	$carta.="Correo: $correo \r\n"; 
	$carta.="Telefono: $telefono \r\n";
	$carta.="Mensaje: $mensaje";


	mail($destinatario, $asunto, $carta);
	header('Location:mensaje-de-envio.html');

?>