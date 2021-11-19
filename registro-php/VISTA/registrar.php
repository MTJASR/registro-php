<?php
include '../CONTROLADOR/conexion.php';
include '../MODELO/R_CONTACTO.php';
session_start();
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
      <div class="col-6"><img src="../IMAGENES/4186626.jpg" class="img-fluid" alt="Responsive image"></div>
      <div class="col-6">
        <br>
        <br>
        <br>
        <!--FORMULARIO-->
        <h3>Formulario de registro</h3>
        
        <form method="post">
          <div class="card">
            <div class="card-body">
             <!-- <form>
                <img src="../IMAGENES/4067820.jpg" id="imagen" alt="..." class=" col-4 img-thumbnail">
                <br>
                <div class="form-group">
                  <label for="exampleFormControlFile1"></label>
                  <br>
                  <input type="file" accept="image/png,image/jpeg" onchange="cargaImagen()">

                </div>
               
                <script>
                  function cargaImagen() {
                    var Imagen = event.target.files[0]
                    console.log(Imagen)
                    if (Imagen.type === "image/png" || Imagen.type === "image/jpeg") {
                      document.getElementById("imagen").src = URL.createObjectURL(event.target.files[0])
                    } else {
                      alert("De momento solo aceptamos imágenes PNG y JPG")
                    }
                  }
                </script>
                
              </form> -->
              <br>
              <label for="exampleFormControlInput1" class="form-label">Nombre completo</label>
              <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su nombre completo" required>

              <br>
              <label for="exampleFormControlInput1" class="form-label">Identificacion</label>
              <input type="number" name="cedula" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su numero de cedula" required>


              <br>
              <label for="exampleFormControlInput1" class="form-label">Telefono</label>
              <input type="number" name="telefono" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su telefono" required>

              <br>
              <label for="exampleFormControlInput1" class="form-label">Correo electronico</label>
              <input type="email" name="correo" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su correo" required>

              <br>
              <label for="exampleFormControlInput1" class="form-label">Ciudad</label>
              <input type="text" name="ciudad" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese la ciudad" required>

              <br>
              <label for="exampleFormControlInput1" class="form-label">Salario</label>
              <input type="number" name="salario" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su salario" required>
              <br>
              <button type="submit" name="registrar" class="btn btn-outline btn-success form-control" style="background-color: #58d87c;">Registrar</button>
            </div>
        </form>
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