<?php
include '../CONTROLADOR/conexion.php';
include '../MODELO/R_CONTACTO.php';
session_start();
$contactos = "SELECT * FROM contacto ";
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
  <nav class="navbar navbar-light" style="background-color: #58d87c;">
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
      <div class="col-4"><img src="../IMAGENES/4411878.jpg" class="img-fluid" alt="Responsive image"></div>
      <div class="col-8">
        <br>
        <br>
        <br>
        <h1>Contactos</h1>
        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="¿ Que contacto desea buscar ?">
        <br>
        <button type="button" class="btn btn-outline-success ">
          Buscar
        </button>
        <br>
        <br>
        <div class="card">
          <div class="card-body">

            <div class="scrollmenu">
              <?php $resultado = mysqli_query($conexion, $contactos);

              while ($row = mysqli_fetch_assoc($resultado)) {
              ?>
                <div class="card">
                  <div class="row">
                    <div class="col-md-3">
                      <img class="card-img-top" src="<?php echo $row["foto"] ?>" alt="Card image cap">
                    </div>
                    <div class="col-md-8">
                      <h5 class="card-title mt-2"><?php echo $row["nombre"] ?></h5>

                      <h6>Cedula: <?php echo $row["cedula"] ?></h6>
                      <h6>Telefono: <?php echo $row["telefono"] ?></h6>

                      <h6>Correo: <?php echo $row["correo"] ?></h6>
                      <h6>Ciudad: <?php echo $row["ciudad"] ?></h6>
                      <h6>Salario: <?php echo $row["salario"] ?></h6> <br>

                      <a href="../MODELO/actualizar.php?id=<?php echo $row["id"]; ?>" class="btn btn-success" style="background-color: #58d87c;">Actualizar</a>
                      <a href="#" class="btn btn-danger">Eliminar</a>
                    </div>
                  </div>

                </div>

                <br>

              <?php }
              mysqli_free_result($resultado) ?>
            </div>


          </div>

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