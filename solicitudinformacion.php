<?php 
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$matricula = $_POST['matricula'];
    $detalles = $_POST['detalles'];

    
	$asunto = 'Solicitud de informacion';
	$mensaje = "Nombre: ".$nombre. " " .$apellido."<br>Matricula: " .$matricula."<br>Detalles: ".$detalles."".$_POST['mensaje'];


	if(mail('controlescolar@cepap.edu.mx', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>