<?php

require '../CONTROLADOR/conexion.php';
require '../MODELO/R_USUARIO.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral BD </title>
    <link rel="stylesheet" href="../ESTILOS/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = Alfa + Slab + One & display = swap" rel="hoja de estilo">
</head>

<body>
    <br>
    <br>
    <br>

    <div class="container">
        
        <div class="card ">
            <div class="card-body">
                <div class="row center">
                    <div class=" col-5">
                        <img src="../IMAGENES/3964906.jpg" class="img-fluid " alt="Responsive image">
                    </div>

                    <div class="col-4">
                        <h1> Bienvenidos a Integral BD</h1>
                        <br>

                        <form action="../MODELO/secion.php" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                                <input type="email" name="correoL" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su correo electronico" required>
                            </div>

                            <br>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                <input type="password" name="contraseñaL" class="form-control" id="inputPassword" placeholder="Ingrese su contraseña" required>
                            </div>
                            <br>
                            <button href="../VISTA/principal.php" type="submit" name="login" class="btn btn-outline btn-success form-control">Iniciar Secion</button>
                           
                            <br>
                            <br>
                        </form>
                        <!-- Registrate -->
                        <form method="post">

                            <button type="button" class="btn btn-outline-success form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Registrate
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre" required>

                                            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su apellido" required>

                                            <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                                            <input type="email" name="correo" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su electronico" required>

                                            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                            <input type="password" name="contraseña" class="form-control" id="inputPassword" placeholder="Ingrese su contraseña" required>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" name="register" class="btn btn-success">Reguistrar</button>
                                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>