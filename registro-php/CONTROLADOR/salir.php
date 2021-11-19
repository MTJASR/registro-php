<?php 

session_start();

session_destroy();

header("location: ../VISTA/index.php");
exit();
?>