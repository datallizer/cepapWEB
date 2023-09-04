<?php 

if(isset($_POST['pagar'])){}
	$nombre = $_POST['nombre'];
    $apellidopaterno = $_POST['apellidopaterno'];
    $apellidomaterno = $_POST['apellidomaterno'];
	$username = $_POST['username'];
    $comprobante = $_FILES["comprobante"]["tmp_name"];
    $mes = $_POST['mes'];
	$asunto = 'Comprobante de pago';
	$mensaje = "Nombre: ".$nombre. " " .$apellidopaterno. " " .$apellidomaterno. "<br>Username: " .$username. "<br>Comprobante: ".$comprobante. "<br>Mes a pagar: ".$mes. "" .$_POST['mensaje'];


	if(mail('pagos@cepap.edu.mx', $asunto, $mensaje)){
        $_SESSION['message'] = "Pago exitoso";
		header("Location: pagos.php");
        exit(0);
	}
 ?>
