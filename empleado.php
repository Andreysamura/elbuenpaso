<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Empleados</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
    <?php //parte de encabezado
    include("encabezado.php")
    ?>  
        <section class="container xl-5 bg-light"> <!-- Buscador -->
            <div class="row">
                <div class="col-lg-5"> 
                    <h3 class="text-center text-muted">Regristro de empleado</h3>
                    <form method="POST" action="recibir_empleado.php">
                        <div class="row mb-3">
                            <label class="col-sm-10">Nombre</label>
                            <div class="col-sm-10">
                                <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Curp</label>
                            <div class="col-sm-10">
                                <input type="text" name="curp" class="form-control" placeholder="Curp">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Domicilio</label>
                            <div class="col-sm-10">
                                <input type="text" name="domicilio" class="form-control" placeholder="Nombre de tu domicilio">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Correo</label>
                            <div class="col-sm-10">
                                <input type="email" name="correo" class="form-control" placeholder="Correo electronic@">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Telefono</label>
                            <div class="col-sm-10">
                                <input type="text" name="telefono" class="form-control" placeholder="Telefono principal">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Fecha</label>
                            <div class="col-sm-10">
                                <input type="text" name="fecha" class="form-control" placeholder="Fecha de registro">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-success">Registrar</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-7">
                    <h3 class="text-center text-muted"> Lista de empleados registrados</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>CURP</th>
                                    <th>Nombre</th>
                                    <th>Domicilio</th>
                                    <th>Correo</th>
                                    <th>Telefono</th>
                                    <th>Fecha De Registro</th>
                                </tr>
                            </thead>

                                    <?php
                                        include("conexion.php");
                                        $consulta="SELECT * FROM altaempleado";
                                        $resultado=mysqli_query($conn,$consulta);
                                        if(mysqli_num_rows($resultado)>0)
                                        {
                                            while($fila=mysqli_fetch_assoc($resultado))
                                            {
                                            echo "<tr>";
                                            echo "<td>".$fila['id_empleado']."</td>";
                                            echo "<td>".$fila['curp']."</td>";
                                            echo "<td>".$fila['nombre']."</td>";
                                            echo "<td>".$fila['domicilio']."</td>";
                                            echo "<td>".$fila['correo']."</td>";
                                            echo "<td>".$fila['telefono']."</td>";
                                            echo "<td>".$fila['fecha_registro']."</td>";
                                            echo "</tr>";
                                            }
                                        }else
                                        {
                                            echo "Sin resultados";
                                        }

                                    ?>

                        </table>
                </div>
            </div>
        </section>

        <footer class="container-fluid bg-light text-center p-3">
            <p>Todos los derechos reservados 2022</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
    
</html>