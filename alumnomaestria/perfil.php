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
                <h4>MI PERFIL
                </h4>
            </div>
            <div class="card-body">
            <?php include('message.php'); ?>

                <?php
                if(isset($_SESSION['username']))
                {
                    $registro_id = mysqli_real_escape_string($con, $_SESSION['username']);
                    $query = "SELECT * FROM usuarios WHERE username='$registro_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $registro = mysqli_fetch_array($query_run);
                        ?>
                       
                        <div class="row">
                            <div class="col-12 col-md-4 mtop">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" value="<?= $registro['nombre']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="apellidopaterno" class="form-label">Apellido paterno</label>
                                <input type="text" class="form-control" id="apellidopaterno" value="<?= $registro['apellidopaterno']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="apellidomaterno" class="form-label">Apellido materno</label>
                                <input type="text" class="form-control" id="apellidomaterno" value="<?= $registro['apellidomaterno']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" id="username" value="<?= $registro['username']; ?>@cepap.mx" disabled>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                            <label for="rol_id" class="form-label">Plan de estudios</label>
                            <input type="text" class="form-control" id="rol_id" value="<?php 
                                if ( $registro['rol_id'] === "1") {
                                    echo"Administrador";
                                  } else if ($registro['rol_id'] === "2") {
                                    echo"Control escolar";
                                  } else if ($registro['rol_id'] === "3") {
                                    echo"Maestría en educacion";
                                  } else if ($registro['rol_id'] === "4") {
                                    echo"Especialidad en docencia";
                                  } else {
                                  }
                                  ?>" disabled>
                            </div>
                        </div>

</div>
</div>

                <?php
                    }
                    else
                    {
                        echo "<h4>No se encontro ningún usuario existente</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
