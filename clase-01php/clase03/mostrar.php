<?php

    require('conexion.php');

    // seleccionamos todos los datos de la tabla videojuegos.
    $sql = "SELECT * FROM videojuegos";

    // crear una variable que guarde el resultado de la consulta de la BD

    $resultado = mysqli_query($conexion, $sql);


    // crearemos una variable que se encargara de manipular y contener el resultado ya que este nos
    // devolvera un arreglo

    $videojuegos = mysqli_fetch_all($resultado);



?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agragar videojuego</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <form action="insertar.php" method="GET" >
        <input type="text" name="videojuego">
        <button class="btn btn-lg btn-outline-danger"  type="submit">Agregar</button>

    </form>

    <?php foreach($videojuegos as $videojuego): ?>
        <p>
            <?php echo $videojuego[1];  ?>
            <a href="eliminar.php?id=<?php echo $videojuego[0]; ?>">X</a>
        </p>
    <?php endforeach; ?>












    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script

</body>
</html>