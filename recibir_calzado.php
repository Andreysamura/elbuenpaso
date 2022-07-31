<?php

echo "<h2>Recibiendo informacion del formulario de registro</h2>";
$codigo=$_POST['codigo'];
echo "El codigo del producto es: ".$codigo."<br>";
$modelo=$_POST['modelo'];
echo "La descripcion es: ".$modelo."<br>";
$talla=$_POST['talla'];
echo  "La talla es :".$talla."<br>";
$tipo=$_POST['tipo'];
echo  "El tipo de calzado es :".$tipo."<br>";
$precio=$_POST['precio'];
echo "El precio es: ".$precio."<br>";
$cantidad=$_POST['cantidad'];
echo "El cantidad es: ".$cantidad."<br>";

include("conexion.php");

$sql="INSERT INTO altacalzado VALUES (id, $codigo,'$modelo',$talla,'$tipo',$precio, $cantidad)";

//evaluar si se registro correctamente el calzado
if(mysqli_query($conn,$sql))
{
    echo "Calzado registrado correctamente";
    //regresar a la pagina anterior
    header("location: registro.php");
}
else{
    echo "Error: ".$sql. "<br>".mysqli_error($conn);
}


?>