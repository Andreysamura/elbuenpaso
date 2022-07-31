<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <?php //parte de encabezado
        include("encabezado.php")
        ?>

<!-- Formulario de registro -->

        <section class="container xl-5 bg-light">
            <div class="row">
                <div class="col-lg-5">
                    <h3 class="text-center text-muted">Regristro de Calzado</h3>
                    <form method="POST" action="recibir_calzado.php">
                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de calzado</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo" class="form-control" placeholder="Introduce el codigo del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Modelo</label>
                            <div class="col-sm-10">
                                <input type="text" name="modelo" class="form-control" placeholder="Escribe la descripcion del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="text" name="talla" class="form-control" placeholder="Introduce la talla del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo" class="form-control" placeholder="Introduce el tipo de calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="text" name="precio" class="form-control" placeholder="Introduce el precio del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Cantidad</label>
                            <div class="col-sm-10">
                                <input type="text" name="cantidad" class="form-control" placeholder="Introduce el precio del calzado">
                            </div>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-success">Registrar</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-7">
                    <h3 class="text-center text-muted"> Lista de calzado registrado</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Codigo</th>
                                    <th>Modelo</th>
                                    <th>Talla</th>
                                    <th>Tipo</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>

                                    <?php
                                        include("conexion.php");
                                        $consulta="SELECT * FROM altacalzado";
                                        $resultado=mysqli_query($conn,$consulta);
                                        if(mysqli_num_rows($resultado)>0)
                                        {
                                            while($fila=mysqli_fetch_assoc($resultado))
                                            {
                                            echo "<tr>";
                                            echo "<td>".$fila['id']."</td>";
                                            echo "<td>".$fila['codcalzado']."</td>";
                                            echo "<td>".$fila['modelo']."</td>";
                                            echo "<td>".$fila['talla']."</td>";
                                            echo "<td>".$fila['tipo']."</td>";
                                            echo "<td>".$fila['precio']."</td>";
                                            echo "<td>".$fila['cantidad']."</td>";
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