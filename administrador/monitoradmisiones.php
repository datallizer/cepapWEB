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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monitor admisiones | Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico.ico" />
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php include 'sidenav.php'; ?>

<div class="container-fluid">
<div class="row userrow margenbajo">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>ADMISIONES
                    <a style="margin:0px 5px;" href="dashboard.php" class="btn btn-dark btn-sm float-end">Inicio</a>
                    <button class="btn btn-success btn-sm float-end" onclick="exportTableToExcel('admisiones')">Excel</button>
                </h4>
            </div>
            <div class="card-body" style="overflow-y:scroll;">
            <?php include('message.php'); ?>
                <table class="table table-bordered table-striped" style="width: 100%;" id="admisiones">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Username</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $query = "SELECT * FROM admisiones ORDER BY id DESC";
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
                                        <td><?= $registro['email']; ?></td>
                                        <td>
                                            <a href="veradmision.php?id=<?= $registro['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                                            
                                            <a href="editaradmision.php?id=<?= $registro['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                            <form action="codeadmision.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete" value="<?=$registro['id'];?>" class="btn btn-danger btn-sm">Borrar</button>
                                            </form>
                                           
                                    </td>
                                    </tr>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "<td><h5> No Record Found </h5></td><td></td><td></td><td></td>";
                            }
                        ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="../js/excel.js"></script>
</body>
</html>
