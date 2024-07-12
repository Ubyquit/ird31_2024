<?php

$hostname = "localhost";
$username = "root";
// $password = ""; xammp windows
$password = "root"; // mamp mac
$database = "usuarios_ird31";

$conexion = new mysqli($hostname, $username, $password, $database);

if ($conexion->connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $conexion->connect_errno . "\n";
    echo "Error: " . $conexion->connect_error . "\n";
    exit;
} else {
    //echo "Conexión exitosa";
}
