<?php
    include_once 'database.php';
    
    session_start();
    

    if(isset($_GET['cerrar_sesion'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $rol = $row[6];
            
            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: administrador/dashboard.php');
                break;

                case 2:
                  header('location: controlescolar/dashboard.php');
                break;

                case 3:
                  header('location: alumnomaestria/perfil.php');
                break;

                case 4:
                    header('location: alumnoespecialidad/perfil.php');
                  break;

                default:
            }
        }else{
            // no existe el usuario
            echo '<script>alert("Usuario o contraseña incorrectos")</script>';
        }
        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/ico.ico">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio | CEPAP</title>
</head>
<body>
    
<?php include 'menu.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center loginform">
        <div class="col-5">
            <h2>INICIAR SESÍON</h2>
            <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" id="username">
                <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <button class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
</body>
</html>