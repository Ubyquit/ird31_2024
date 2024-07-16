<?php

print_r($_POST);

include_once '../connection/connect.php';

$nombre = $_POST['nombre'];
$ap_paterno = $_POST['ap_paterno'];
$ap_materno = $_POST['ap_materno'];
$c_electronico = $_POST['c_electronico'];
$tel = $_POST['tel'];
$f_nacimiento = $_POST['f_nacimiento'];
$id_usuario = $_POST['id_usuario'];

$sql = "UPDATE usuarios
SET nombre = '$nombre', 
ap_paterno = '$ap_paterno', 
ap_materno = '$ap_materno', 
c_electronico = '$c_electronico', 
tel = '$tel', 
f_nacimiento = '$f_nacimiento' 
WHERE id_usuario = $id_usuario";

$conexion->query($sql);

header("Location: ../index.php");
