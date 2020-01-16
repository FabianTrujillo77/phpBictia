<?php
    // FUNCIONES

    function edadPersona($edadMinima = 18){
        if($edadMinima >= 18){
            echo "la edad es: $edadMinima <br>";
        }else{
            echo "Eres menos d edad, lo siento :( :( <br>";
        }
    }
    edadPersona(35);
    edadPersona();
    edadPersona(70);
    edadPersona(10);

    echo "<hr>";

    // FUNCION CON RETURN
    // en este caso definimos el tipo de dato del parametro
    // siendo int / integer = entero


    function sumar(int $x, int $y){
        $z = $x + $y;
        return $z;
    }
    echo "5 + 10 = " . sumar(5, 10) . "<br>";
    echo "7 + 13 = " . sumar(7, 13);





echo "<hr>";

// 1) crear una funcion que imprima los numero del 1 al 100
// y del 101 al 200
// 2) crear una funcion que imprima todas las tablas del 1 al 10
// 3)crear una funcion que valla desde el 8 al 500


        
           

            
      
// function numeros($numero = 1){
//     if($numero == 1){
//          for(  $i=0; $i<=100; $i++){
//                 echo "$i <br>"; 
//                 $i++;
//          }
//     }    else if($numero == 2){

//          for(  $i=101; $i<=200; $i++){
//                 echo "$i <br>"; 
//                 // $i++;
//          }
//     }    else{
//         echo "error";
//     }
// }
// numeros(2);


// echo"<hr>";

// function tablas(){
//     for($e = 1; $e <=10; $e++){
//         for($i = 1; $i <= 10; $i++ ){
//             $resultado = $e * $i;
//             echo "$e" . "x" . "$i" . "=" . "$resultado" . "<br>";
//         }
//         echo "<hr>";

//     }
// }
// tablas();

echo "<hr>";

$numero = 5;
for($numero = 5; $numero <= 500; $numero++){
    if($numero % $numero = 0)
};

    













?>