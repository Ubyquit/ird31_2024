<?php 

$id_usuario = $_GET['id_usuario'];

include_once '../connection/connect.php';

$sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";

$conexion->query($sql);

header("Location: ../index.php");

?>