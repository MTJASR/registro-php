<?php 
include '../CONTROLADOR/conexion.php';
if (isset($_POST['registrar'])) {

$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$ciudad = $_POST["ciudad"];
$salario = $_POST["salario"];
$insertar = "INSERT INTO contacto(nombre,cedula,telefono,correo,ciudad,salario) VALUES ('$nombre','$cedula','$telefono','$correo','$ciudad','$salario')";
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM contacto WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_usuario)>0) {
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>¡ ALERTA !</strong> El usuario <?php $nombre ?>  ya se encuentra registrado
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
    exit;
}
$resultado = mysqli_query($conexion,$insertar);
if ($resultado) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>¡ FELICITACIONES !</strong> El usuario <?php $nombre ?>  se registro correctamete
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    
}else {
    echo "<script>alert('se ha registrado el usuario')"; 
}

mysqli_close($conexion);
} ?>