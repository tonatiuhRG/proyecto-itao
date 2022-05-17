<?php
include('conexion.php');
?>
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
    
    <title>bienvenidos</title>
</head>
<body>
  <!-----------cabecera-->
  <div>
  <header class="enca"> <!---barra-->
    <div class="wrap"> <!---dentro del encabezado-->
        <div class="logos"> <!----titulo-->
        BIENVENIDOS
        </div>
        <nav> <!----botones-->
            <a href="index.php">Inicio</a>
            <a href="home.php">Tabla</a>
        </nav>
    </div>
</header>

<!------------mmostrar------>
<div class="espacio-tabla">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">usuario</th>
      <th scope="col">contraseña</th>
    </tr>
  </thead>
  <tbody>

<?php

    $consulta="SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $consulta);

    while($mostrar = mysqli_fetch_array($resultado)){

   
?>

    <tr>
       <td><?php echo $mostrar['usuario'] ?></th>
       <td><?php echo $mostrar['contraseña'] ?></th>


      
       <td>
           <!----editar----->
           <a href="editar.php?usuario=<?php $mostrar['usuario']?>">editar</a>

            <!----eliminar----->
           <form action="eliminar.php" method="post">
               <input type="hidden" value="<?php echo $mostrar['id_usuarios']?>" name="txtid_usuarios"readonly>
               <td><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
            </form>
        </td>
    </tr>



    
    
    




    
    </tr>

    <?php
 }
    ?>
  </tbody>
</table>
</div>


</body>


</body>
</html>