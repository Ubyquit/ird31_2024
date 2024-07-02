<?php

//! class = (clase) fabrica
//! propiedades
//! __construct = constructos maquinas
//! parametros son elementos cuantitativos, cualitativos y/o descriptivos
//! $this = (este) es un puntero que hace referencia a la clase
//! intancia = creación del objeto
//! metodos =! funciones (pertenecen a un objeto).

class autos
{
    //propiedades
    public $marca;
    public $modelo;
    public $color;
    public $precio;
    public $estado = "en reposo";

    //constructor
    public function __construct($marca, $modelo, $color, $precio)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
    }

    //metodos
    public function mostrar()
    {
        echo "<p>Marca: " . $this->marca . "</p>";
        echo "<p>Modelo: " . $this->modelo . "</p>";
        echo "<p>Color: " . $this->color . "</p>";
        echo "<p>Precio: " . $this->precio . "</p>";
    }

    public function encender()
    {
        $this->estado = "en movimiento";
        echo "<p>El auto ". $this->modelo ." está: " . $this->estado . "</p>";
    }

    public function apagar()
    {
        $this->estado = "en reposo";
        echo "<p>El auto ". $this->modelo ." está: " . $this->estado . "</p>";
    }
}

//instancias
$camioneta = new autos("Ford", "Ranger", "Blanca", 1000000);
$camioneta_dos = new autos("Chevrolet", "Suburban LT", "Negra", 1200000);

$camioneta->mostrar();
$camioneta_dos->mostrar();

$camioneta->encender();
$camioneta_dos->apagar();