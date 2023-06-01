<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: ../index.php');
        }
    }

    require '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico.ico">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Dashboard | CEPAP</title>
</head>
<body>

<?php include 'sidenav.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-around align-items-top margenbajo">
        <div class="col-12 margintop">
            <h4>DASHBOARD</h4>
        </div>

        <div class="col-12 col-md-11 card dcard" style="background-color:#fff7de;">
        <a href="monitoradmisiones.php" class="dashlink">
            <div class="row justify-content-around margintop">
                <div class="col-12"><h4>SOLICITUDES DE ADMISION</h4></div>
            </div>
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Username</th>
                            <th>Teléfono</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM admisiones ORDER BY id DESC LIMIT 5";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $registro)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $registro['nombre']; ?> <?= $registro['apellidopaterno']; ?> <?= $registro['apellidomaterno']; ?></td>
                                        <td><?= $registro['username']; ?></td>
                                        <td><?= $registro['telefono']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<td><p> No record found </p></td><td>";
                            }
                        ?>
                        
                    </tbody>
                </table>
             </a>
        </div>

        <div class="col-12 col-md-5 card dcard" style="background-color:#deffe7;">
        <a href="usuarios.php" class="dashlink">
            <div class="row justify-content-around margintop">
                <div class="col-12"><h4>USUARIOS RECIENTES</h4></div>
            </div>
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 5";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $registro)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $registro['nombre']; ?> <?= $registro['apellidopaterno']; ?> <?= $registro['apellidomaterno']; ?></td>
                                        <td><?= $registro['username']; ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<td><p> No record found </p></td><td>";
                            }
                        ?>
                        
                    </tbody>
                </table>
            </a>
        </div>

        <div class="col-12 col-md-5 card dcard" style="background-color:#deedff;">
        <a href="monitorinformacion.php" class="dashlink">
            <div class="row justify-content-around margintop">
                <div class="col-12"><h4>INFORMACION PERSONAL ALUMNOS</h4></div>
            </div>
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Estatus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM informacion ORDER BY id DESC LIMIT 5";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $registro)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $registro['username']; ?></td>
                                        <td><?php 
                                        if ( $registro['estatus'] === "0") {
                                            echo"Informacion incompleta";
                                          } else if ($registro['estatus'] === "1") {
                                            echo"Completo";
                                          } else {
                                          }
                                          ?>   </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<td><p> No Record Found </p></td><td></td>";
                            }
                        ?>
                        
                    </tbody>
                </table>
            </a>
        </div>

       

        
    </div>
</div>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
</body>
</html>
