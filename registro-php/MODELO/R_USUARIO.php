<?php 
include '../CONTROLADOR/conexion.php';
if (isset($_POST['register'])) {
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$contraseña = $_POST["contraseña"];
$insertar = "INSERT INTO usuarios(nombre,apellido,correo,contrasena) VALUES ('$nombre','$apellido','$correo','$contraseña')";
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_usuario)>0) {
    echo ' el usuario ya esta registrado';
    exit;
}
$resultado = mysqli_query($conexion,$insertar);
if ($resultado) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>¡ FELICITACIONES !</strong> El usuario se registro correctamete
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;
    
}else {
    echo "<script>alert('se ha registrado el usuario')"; 
}

mysqli_close($conexion);
}
?>