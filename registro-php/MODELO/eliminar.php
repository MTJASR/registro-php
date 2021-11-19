<?php
include '../CONTROLADOR/conexion.php';
if (isset($_POST['actualizar'])) {
    $id = $_POST['id'];
 

    //actualizar los dato
    $eliminar = "DELETE FROM contacto WHERE contacto.id = id='$id'";

    $resultado = mysqli_query($conexion, $eliminar);
    if ($resultado) {
        header("location: ../VISTA/contactos.php");
        echo "<script>
    alert('Contacto actualizado correctamente'); 
    windows.histoy.go(-1);
    </script>";
   
    } else {
        header("location: ../VISTA/contactos.php");
        echo "<script>
    alert('No se pudo actualiar el contacto'); 
    windows.histoy.go(-1);
    </script>";
    }

   
}