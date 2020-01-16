<?php
    // solicitamos la conecion a la BD a traves del metodo require();
    require('conexion.php');

    // vamos a crear una variable que traiga los datos que el ususario envia 
    // desde un formulario

    $videojuego = $_GET['videojuego'];

    //crearemos una variable que se va a encargar de contener la sentencia sql
    // para guargar los datos en la tabla videojuegos de la BD bictia

    $sql  = "INSERT INTO videojuegos(nombre) VALUES ('$videojuego')";

    // el metodo mysqli_query() se encarga de enviar los datos 
    // Necesita la conexion y la sentencia sql
    mysqli_query($conexion, $sql);

    // direccionamiento de rutas

    header('location: mostrar.php');
    


?>