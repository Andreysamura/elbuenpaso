<?php

//llamada de conexion de BD
      include("conexion.php");

//recibir codigo de calzado
$codigo = $_GET['codcalzado'] ;

//sql de eliminacion de calzado
$consulta = "DELETE FROM altacalzado WHERE codcalzado=$codigo";

if (mysqli_query($conn, $consulta)) {
  //echo "<br>Calzado eliminado correctamente";
  //regresar a la pagina anterior
  header("location: principal.php");
} else {
  echo "<br>Error al eliminar el calzado: " . mysqli_error($conn);
}

mysqli_close($conn);
?>