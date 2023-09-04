<?php

    session_start();
    $username=$_SESSION['username'];

    require '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil | CEPAP</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico.ico" />
</head>
<body>
<?php include 'sidenav.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-11">
            <h2 style="margin-top:40px;margin-bottom:30px">Ayuda</h2>
            <p><i class="bi bi-1-circle-fill"></i> La informacion de tu <b>perfil</b> es obtenida mediante el llenado del formulario <a href="cepap.mx/admisiones">cepap.mx/admisiones</a></p>
            <p><i class="bi bi-2-circle-fill"></i> Si eres estudiante de nuevo ingreso deberás llenar tu <a href="informacionpersonal.php">informacion personal</a> para completar tu ficha de estudiante, el boton permanecera activo hasta que todos los campos esten completos, una vez llenes el formulario este boton se desactivara de forma automatica, por lo que es importante que llenes toda la información de forma correcta</p>
            <p><i class="bi bi-3-circle-fill"></i> Deberás realizar tu <a href="pagos.php">pago</a> mensual llenando todos los datos del formulario incluyendo tu comprobante en foto o escaneado, estos serán automaticamente enviados a controlescolar@cepap.mx</p>
            <p><i class="bi bi-4-circle-fill"></i> En caso de no contar con tu numero de cedula tendras un corto lapso de tiempo para tramitarla y completar tu ficha escolar del CEPAP, de lo contrario no podras continuar con el plan de estudios. (Acercarse a control escolar para conocer la fecha limite segun el periodo escolar vigente)</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
