<?php

function mostrar($marca, $modelo, $color, $precio)
{
    echo "<p>Marca: " . $marca . "</p>";
    echo "<p>Modelo: " . $modelo . "</p>";
    echo "<p>Color: " . $color . "</p>";
    echo "<p>Precio: " . $precio . "</p>";
}

mostrar("Ford", "Ranger", "Blanca", 1000000);
mostrar("Chevrolet", "Suburban LT", "Negra", 1200000);

?>