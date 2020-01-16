<?php


//ARRAYS
echo " ARRAYS <br>" ;

$colores = array("rojo", "verde", "azul", "amarillo");

foreach($colores as $valores){
    echo "$valores <br> ";
}

echo count($colores); // longitud de un arreglo
echo "<hr>";

//otro recorrido de arreglo
echo " otro recorrido de arreglo '<br>" ;

$autos = array("Ferrari", "Lamborghini", "Audi");
$longArreglo = count($autos);
for($i = 0; $i < $longArreglo; $i++){
    echo $autos[$i]. "<br>";
}

echo "<hr>";


//ARREGLOS ASOCIATIVOS
echo " ARREGLOS ASOCIATIVOS '<br>" ;

$persona = array("luna" => "18", "fernando" => "20", "Fabian L." => "31");
echo "luna tiene " .$persona['luna'] . " años.";
echo "<hr>";

//accedemos al arrglo asociativo e imprimos el valor a trabes de la clave


// RECORRER UN ARREGLO ASOCIATIVO
echo " RECORRER UN ARREGLO ASOCIATIVO '<br>" ;

foreach($persona as $nombre => $nombre_edad){
    echo "clave: " . $nombre . ", valor: " . $nombre_edad . "<br>";
}

echo "<hr>";



// ARREGLO MULTIDIMENSIONAL donde en un arreglo tenemos varios elementos con varios valores
echo " ARREGLO MULTIDIMENSIONAL donde en un arreglo tenemos varios elementos con varios valores '<br>" ;
$productos = [
    [
        'nombre' => 'empanada',
        'precio' => 1000,
        'cantidad' => 12
    ],
    [
    'nombre' => 'pedaso de pizza',
    'precio' => 5000,
    'cantidad' => 5
    ]
];

$total = 0;
foreach($productos as $producto){
    $total += $producto['precio'] * $producto['cantidad']; // += para sumar los valores, de lo contrario sobre escribiria un valor encima del anterior
    echo $producto['nombre'] . ": $" . $producto['precio'] . " x "  . $producto['cantidad'] . "<br>";

}
echo "total: " . $total;

// OTRA FORMA
$productos = array
(
    array("lechona", 50000, 2),
    array("Galletas", 600, 10),
    array("gaseosa", 1500, 7)

);
echo $productos[0][0] . " : precio: " . ", cantidad: " . $productos[0][1];

?>
/*
    crear un arreglo que contenga asociacion por clave y valor de peliculas 
    de la siguiente forma:
    nombre pelicula
    Director
    años
    Personaje principal.

    se debe imprimir en el html el nombre de pelicula como titulo, director negrilla
    año subrayado, personaje principal cursiva
*/


<?php
$peliculas = [
    [
        'Nombre' => 'Pinocho',
        'Director' => 'Fabian Trujillo',
        'Año' => 1990,
        'personaje-principal' => 'Fabian Trujillo'
    ],
    [
        'Nombre' => 'Terminator',
        'Director' => 'Jose Herrera',
        'Año' => 1985,
        'personaje-principal' => 'Jose Herrera'
    ],
    [
        'Nombre' => 'Avanger',
        'Director' => 'Mario Mendez',
        'Año' => 1990,
        'personaje-principal' => 'Mario Mendez'
    ],
    [
        'Nombre' => 'Batman',
        'Director' => 'Sebastian Orjuela',
        'Año' => 1990,
        'personaje-principal' => 'Sebastian Orjuela'
    ],
    [
        'Nombre' => 'Superman',
        'Director' => 'Daniel Palacios',
        'Año' => 1990,
        'personaje-principal' => 'Daniel Palacios'
    ]
    
];
foreach($peliculas as $pelicula){
    echo '<h1>' . $pelicula['Nombre'] . '</h1>' ;
    echo '<b>' . $pelicula['Director'] .'</b>' . '<br>';
    echo '<u>' . $pelicula['Año'] . '</u>' . '<br>' ;
    echo '<i>' . $pelicula['personaje-principal'] . '<i>';


};
?>

