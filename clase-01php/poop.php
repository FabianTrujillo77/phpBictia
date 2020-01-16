
<?php

//  BASES DE PROGRAMACION ORIENTADA A OBJETOS

class Persona{
    // declarar las variables que utilizara la clase

    public $nombre;
    public $apellido;
    public $edad;

    // inicializar el constructor
    // inicia las variables (atributos) de la clase
    //para que puedan ser utilizadas en el moemento de realizar una instancia

    public function __construct($nombre, $apellido, $edad){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> edad = $edad;
    }

    // un metodo es una funcion propia de la clase
    public function saludar(){
        echo "hola, soy $this->nombre $this->apellido y tengo $this->edad años";
    }
}

// se realiza la instancia con el nombre de la clase en minuscula

$persona = new Persona('Fabian', 'Trujillo', 30);
$persona -> saludar();




// A traves de la poo vamos a crear la receta de un desayuno.

class Desayuno{

public $huevos;
public $sal;
public $aceite;
public $cebolla;
public $tomate;
public $agua;
public $chocolate;
public $queso;
public $pan;

public function __construct($huevos, $sal, $aceite, $cebolla, $tomate, $agua, $chocolate, $queso, $pan){
$this-> huevos = $huevos;
$this-> sal = $sal;
$this-> aceite = $aceite;
$this-> cebolla = $cebolla;
$this-> tomate = $tomate;
$this-> agua = $agua;
$this-> chocolate = $chocolate;
$this-> queso = $queso;
$this-> pan = $pan;
}

public function huevos(){
    echo "para el dia de hoy tenemos $this->huevos revueltos con  $this->aceite con $this->sal, $this->tomate y $this->cebolla ";
}

public function chocolate(){
    echo "para el dia de hoy tenemos $this->chocolate en $this->agua";
}
public function queso(){
    echo  "tambien tenemos $this->queso y $this->pan";
}





public function desayunoListo(){
    echo "El desayuno esta listo";
}
}
$desayuno = new Desayuno('huevos', 'aceite', 'sal', 'tomate', 'cebolla', 'chocolate', 'agua', 'queso', 'pan');
$desayuno ->huevos();
$desayuno -> chocolate();
$desayuno -> queso();


$desayuno-> desayunoListo();

?>
