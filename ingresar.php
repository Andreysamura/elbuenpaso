<?php

include("conexion.php");

$user = $_POST["user"];
$pass = $_POST["pass"];
session_start();
$_SESSION['user']=$user;


$consulta="SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena ='$pass'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

 if($filas)
{
    header("location:principal.php");
}else{
    ?>
    <?php
    include("index.php");
    echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
}

mysqli_free_result($resultado);
mysqli_close($conn);
?>