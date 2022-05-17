<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
    <form action="validar.php" method="POST">
        <h1>registro itao</h1>
        <p>usuario<input type="text" placeholder="ingrese usuario" name="usuario"></p>
        <p>password<input type="password" placeholder="ingrese contraseña" name="contraseña"></p>
        <input type="submit" value="ingresar">
        
        <buton onclick="location.href='registrar.php'">registrar</button>

</form>

</body>
</html>