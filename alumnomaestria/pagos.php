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

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>NOTIFICAR PAGO</h4>
                </div>
                <div class="card-body">
                    <form action="codepago.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 col-md-4 mtop">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required autocomplete="off">
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="apellidopaterno" class="form-label">Apellido paterno</label>
                                <input type="text" class="form-control" id="apellidopaterno" name="apellidopaterno" autocomplete="off" required>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="apellidomaterno" class="form-label">Apellido materno</label>
                                <input type="text" class="form-control" id="apellidomaterno" name="apellidomaterno" autocomplete="off" required>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" autocomplete="off" value="<?= $username?>" disabled>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="mes" class="form-label">Fecha de pago</label>
                                <input type="date" class="form-control" id="mes" name="mes" autocomplete="off">
                            </div>

                            <div class="col-12">
                                <label for="comprobante" class="form-label">Subir comprobante de pago <span style="font-size:12px;">(Imagen o pdf)</span></label>
                                <input class="form-control" type="file" id="comprobante" name="comprobante" required>
                            </div>

                            <div class="col-12 text-center" style="margin-top:20px;">
                                <button class="btn btn-dark" name="pagar" type="submit">Enviar</button>
                            </div>

                        </div>
                    </form>
                </div>
                
            </div>
            <h3 class="mt-3">INFORMACIÓN BANCARIA</h3>
            <p style="font-size:12px">*Realiza tu transferencia bancaria y adjunta tu comprobante de pago</p>
                <p><b>Cuenta:</b> 0828910295</p>
                <p><b>Clabe:</b> 072010008289102956</p>
                <p><b>Banco:</b> Banorte</p>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
