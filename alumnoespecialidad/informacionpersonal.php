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
    <title>Informacion personal | CEPAP</title>
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
                <h4>INFORMACION PERSONAL
                </h4>
            </div>
            <div class="card-body">
            <?php include('message.php'); ?>
                <?php
                if(isset($_SESSION['username']))
                {
                    $registro_id = mysqli_real_escape_string($con, $_SESSION['username']);
                    $query = "SELECT * FROM informacion WHERE username='$registro_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $registro = mysqli_fetch_array($query_run);
                        ?>
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 mtop">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" id="username" value="<?= $registro['username']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="estado" class="form-label">Estado de origen</label>
                                <input type="text" class="form-control" id="estado" value="<?= $registro['estado']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="pais" class="form-label">País de origen</label>
                                <input type="text" class="form-control" name="pais" id="pais" value="<?= $registro['pais']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="instituto" class="form-label">Instituto de procedencia</label>
                                <input type="text" class="form-control" id="instituto" value="<?= $registro['instituto']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="grado" class="form-label">Ultimo grado de estudios</label>
                                <input type="text" class="form-control" id="grado" value="<?= $registro['grado']; ?>" disabled>
                            </div>
                            <div class="col-12 col-md-6 mtop">
                                <label for="titulacion" class="form-label">Estatus de titulación</label>
                                <input type="text" class="form-control" id="titulacion" value="<?= $registro['titulacion']; ?>" disabled>
                            </div>
                            <div class="col-12 col-md-6 mtop">
                                <label for="cedula" class="form-label">Número de cedula</label>
                                <input type="text" class="form-control" id="cedula" value="<?= $registro['cedula']; ?>" disabled>
                            </div>
                            <div class="col-12 col-md-7 mtop">
                                <label for="area" class="form-label">Área en la que te desempeñas</label>
                                <input type="text" class="form-control" id="area" value="<?= $registro['area']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-5 mtop">
                                <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="text" class="form-control" id="nacimiento" value="<?= $registro['nacimiento']; ?>" disabled>
                            </div>
                            <div class="col-12 mtop">
                            <?php 
                                if ( $registro['estatus'] === "1") {
                                    
                                  } else {
                                    ?><p style="font-size:11px">*Completa toda tu informacion personal</p><a href="completarinformacion.php" class="btn btn-warning">Completar informacion</a><?php
                                  }
                                  ?>
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
