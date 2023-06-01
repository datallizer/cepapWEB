<?php
session_start();
require '../dbcon.php';

if(isset($_POST['save']))
{
    $username = mysqli_real_escape_string($con, $_SESSION['username']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $pais = mysqli_real_escape_string($con, $_POST['pais']);
    $instituto = mysqli_real_escape_string($con, $_POST['instituto']);
    $grado = mysqli_real_escape_string($con, $_POST['grado']);
    $titulacion = mysqli_real_escape_string($con, $_POST['titulacion']);
    $cedula = mysqli_real_escape_string($con, $_POST['cedula']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $nacimiento = mysqli_real_escape_string($con, $_POST['nacimiento']);
    $estatus = mysqli_real_escape_string($con, $_POST['estatus']);

    $query = "UPDATE informacion SET estado='$estado', pais='$pais', instituto='$instituto', grado='$grado', titulacion='$titulacion', cedula='$cedula', area='$area', nacimiento='$nacimiento', estatus='1' WHERE username = '$username'";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Información actualizada";
        $_SESSION['message'] = "En caso de no contar con tu cédula de licenciatura solicita la fecha limite de emtrega en el departamento de control escolar";
        header("Location: informacionpersonal.php");
        exit(0);
        
    }
    else
    {
        $_SESSION['message'] = "Error al actualizar la informacion";
        header("Location: informacionpersonal.php");
        exit(0);
    }
}


?>
