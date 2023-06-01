<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../index.php');
    }else{
        if($_SESSION['rol'] != 2){
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
    <title>Editar noticia | Administrador</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<?php include 'sidenav.php'; ?>
  
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>EDITOR DE NOTICIA 
                            <a href="monitornoticias.php" class="btn btn-danger btn-sm float-end">REGRESAR</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id']))
                        {
                            $registro_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM noticias WHERE id='$registro_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $registro = mysqli_fetch_array($query_run);
                                ?>
                                <form action="codenoticias.php" method="POST">
                                <input type="hidden" name="id" value="<?= $registro['id']; ?>">

                                <div class="row mtop">
                                    <div class="col-12">
                                        <label for="titulo" class="form-label">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" value="<?= $registro['titulo']; ?>">
                                    </div>

                                    <div class="col-6">
                                        <label for="descripcion" class="form-label">Descripcion corta</label>
                                        <input type="text" class="form-control" name="descripcion" id="descripcion" value="<?= $registro['descripcion']; ?>">
                                    </div>

                                    <div class="col-6">
                                        <label for="nota" class="form-label">Nota</label>
                                        <input  type="text" class="form-control" name="nota" id="nota" value="<?= $registro['nota']; ?>">
                                    </div>

                                    <div class="col-12">
                                        <label for="fecha" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" name="fecha" id="fecha"
                                        value="<?= $registro['fecha']; ?>">
                                    </div>

                                    <div class="col-12">
                                        <label for="autor" class="form-label">Autor</label>
                                        <input type="text" class="form-control" name="autor" id="autor" value="<?= $registro['autor']; ?>" disabled>
                                    </div>
                                </div>
   
                                <div class="col-12 text-center mt-2 mb-2">
                                    <button type="submit" name="update" class="btn btn-warning">
                                        Actualizar noticia
                                    </button>
                                </div>


        </div>
    </div>
                                    
</form>
                        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
