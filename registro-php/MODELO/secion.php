<?php 
include '../CONTROLADOR/conexion.php';

session_start();

$correo = $_POST['correoL'];
$contraseña = $_POST['contraseñaL'];

$q = "SELECT COUNT(*) as contar from usuarios where correo ='$correo' and contrasena ='$contraseña'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if ($array['contar'>0]) {
   $_SESSION['correoL'] = $correo;
    header("location: ../VISTA/principal.php");
}else {
   
    echo "<script>alert('se ha registrado el usuario')"; 
}
return $q;
