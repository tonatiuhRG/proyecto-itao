<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrar usuarios</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
<?php
?>
<h1>registro de usuarios</hl>
<form method="post" action="ingresar.php">
<div class="form-floating mb-3">
    <input type="text" name="usuario" pattern="[a-ZA-Z0-9]+" required 
    class="form-control" id="floatingInput" placeholder="usuario"name="usuario"/>
</div>
<div class="form-floating">
    <input type="password" name="contraseña" required
    class="form-control" id="floatingInput" placeholder="contraseña"name="contraseña" />
</div>
<button type="submit" name="registrar" value="Registrar">Registrar</button>
</form>
<button onclick="location.href='index.php'">Regresar</button>
</body>
</html>