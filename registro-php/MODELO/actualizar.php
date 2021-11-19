<?php
include '../CONTROLADOR/conexion.php';
include '../MODELO/R_CONTACTO.php';
include '../MODELO/pro_actualizar.php';
session_start();
$id = $_GET["id"];
$conta = "SELECT * FROM contacto WHERE id='$id'";
$correo = $_SESSION['correoL'];
if (!isset($correo)) {
    header("location: ../VISTA/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integral BD </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <!--MENU-->
    <nav class="navbar navbar-light" style="background-color: #15953E;">
        <div class="container">

            <a class="navbar-brand text-white " href="../VISTA/principal.php">Integral BD</a>
            <a class="nav-link text-white" href="../VISTA/registrar.php">Registrar </a>

            <a class="nav-link text-white" href="../VISTA/contactos.php">Contactos </a>

            <form class="form-inline">
                <a class="btn btn-danger my-2 my-sm-0" href="../CONTROLADOR/salir.php"> Cerrar Secion</a>
            </form>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <!--IMAGEN-->
            <div class="col-5"><img src="../IMAGENES/4411878.jpg" class="img-fluid" alt="Responsive image"></div>
            <div class="col-7">
                <br>
                <br>
                <br>
                <h1>Actualizar contacto</h1>

                </button>
                <br>
                <form action="../MODELO/pro_actualizar.php"  >
                <?php $resul = mysqli_query($conexion, $conta);

                while ($row = mysqli_fetch_assoc($resul)) {
                ?>

                    <form method="$_POST" >
                        <div class="card">
                            <div class="card-body">

                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
                                <input type="text" value="<?php echo $row["nombre"] ?>" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre completo" required>

                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Identificacion</label>
                                <input type="number" value="<?php echo $row["cedula"] ?>" name="cedula" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su numero de cedula" required>


                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                                <input type="number" value="<?php echo $row["telefono"] ?>" name="telefono" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su telefono" required>

                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
                                <input type="email" value="<?php echo $row["correo"] ?>" name="correo" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su correo" required>

                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
                                <input type="text" value="<?php echo $row["ciudad"] ?>" name="ciudad" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese la ciudad" required>

                                <br>
                                <label for="exampleFormControlInput1" class="form-label">Salario</label>
                                <input type="number" value="<?php echo $row["salario"] ?>" name="salario" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su salario" required>
                                <br>
                                <button type="submit" name="actualizar" class="btn btn-outline btn-success form-control">Actualizar</button>
                            </div>
                    </form>

                    </tr>

                <?php } ?>
                </form>
                </tbody>
                </table>
            </div>

        </div>
    </div>

    </div>


    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>