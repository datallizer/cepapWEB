<?php 
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
	$matricula = $_POST['matricula'];
    $detalles = $_POST['detalles'];
	$pago = $_FILES["pago"]["tmp_name"];
	$asunto = 'Solicitud de constancia';
	$mensaje = "Nombre: ".$nombre. " " .$apellido."<br>\n Matricula: " .$matricula."<br>\n Detalles: ".$detalles."<br>\n Comprobante de pago: ".$pago."".$_POST['mensaje'];


	if(mail('controlescolar@cepap.edu.mx', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>