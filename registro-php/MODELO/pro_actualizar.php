<?php
include '../CONTROLADOR/conexion.php';
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
   
    $nombre = $_POST["nombre"];
    $cedula = $_POST["cedula"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $ciudad = $_POST["ciudad"];
    $salario = $_POST["salario"];

    //actualizar los dato
    $actualizar = "UPDATE contacto SET nombre='$nombre',cedula='$cedula',telefono='$telefono',correo='$correo',ciudad='$ciudad',salario='$salario' WHERE id='$id'";

    $resultado = mysqli_query($conexion, $actualizar);
    if ($resultado) {
        echo "<script>
    alert('Contacto actualizado correctamente'); 
    windows.histoy.go(-1);
    </script>";
    } else {

        echo "<script>
    alert('No se pudo actualiar el contacto'); 
    windows.histoy.go(-1);
    </script>";
    }
    mysqli_close($conexion);
}
?>