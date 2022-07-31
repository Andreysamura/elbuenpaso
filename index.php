<!DOCTYPE html>
<html>
    <head>
        <title>Login_integradora</title>
        <meta charset="uft-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <div class="container-fluid mx-lg-4">
             <div class="container">
                <div class="row">
                    <div class="col-lg-6" >
                        <h1 style="text-align:center; font-size:75px;">Shoe shop</h1>
                        <div   style="margin-left:145px;">
                            <img src="img/login.png" width="250px" height="250px">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                       
                        <form action="ingresar.php" method="POST">
                        <h2 style="text-align:center;">Iniciar sesión</h2>
                          
                        <div>
                            <label class="form-label">Escribe tu usuario</label>
                            <input type="text" name="user" placeholder="Ingrese su usuario aquí" class="form-control" required>
                        </div>
            
                        <div>
                            <label class="form-label">Escribe tu contraseña</label>
                            <input type="password" name="pass" placeholder="Ingrese su contraseña aquí" class="form-control" required>
                        </div>
            
                        <div>
                            <style >
                                .btn{
                                    margin-top: 2rem;
                                }
                            </style>
                            <button type="submit" value="ingresar" name="bt_ingresar" class="btn btn-success">Ingresar</button>
                            
                        </div><hr>
                       </form>
                    </div>
                </div>  
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
    
</html>