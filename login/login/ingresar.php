<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingresar</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include('conexion.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$consulta="INSERT INTO `usuarios` (`usuario`, `contraseña`)
VALUES ('$usuario', '$contraseña')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);

?>  
 </from> 
 <button onclick="location.href='index.php'">Regresar</button>
</body>
</html>

