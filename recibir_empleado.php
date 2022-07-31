<?php

echo "<h2>Recibiendo informacion del formulario de registro</h2>";
$nombre=$_POST['nombre'];
echo "El nombre es: ".$nombre."<br>";
$curp=$_POST['curp'];
echo "La curp es: ".$curp."<br>";
$domicilio=$_POST['domicilio'];
echo  "La domicilio es :".$domicilio."<br>";
$correo=$_POST['correo'];
echo  "El correo es :".$correo."<br>";
$telefono=$_POST['telefono'];
echo "El telefono es: ".$telefono."<br>";
$fecha=$_POST['fecha'];
echo "El fecha es: ".$fecha."<br>";

include("conexion.php");

$sql="INSERT INTO altaempleado VALUES (id_empleado,'$curp','$nombre','$domicilio','$correo', '$telefono', $fecha)";

//evaluar si se registro correctamente el calzado
if(mysqli_query($conn,$sql))
{
    echo "Calzado registrado correctamente";
    //regresar a la pagina anterior
    //header("location: registro.php");
}
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);
}


?>