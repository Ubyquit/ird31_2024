<?php 

print_r($_POST);

include_once '../connection/connect.php';

$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$c_electronico = $_POST['c_electronico'];
$tel = $_POST['tel'];
$f_nacimiento = $_POST['f_nacimiento'];

$sql = "INSERT INTO usuarios (nombre, ap_paterno, ap_materno, c_electronico, tel, f_nacimiento) 
VALUES ('$nombre', '$ap_paterno', '$ap_materno', '$c_electronico', '$tel', '$f_nacimiento')";

$conexion->query($sql);

header("Location: ../index.php");

?>