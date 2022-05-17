<?php

include('conexion.php');

$id_usuarios=$_POST['txtid_usuarios'];
mysqli_query($conexion,"DELETE FROM usuarios where id_usuarios='$id_usuarios'")or die("error al eliminar");

mysqli_close($conexion);
header("location:home.php");

?>