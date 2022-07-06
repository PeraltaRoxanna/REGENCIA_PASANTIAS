<!-- LA F es por funcion -->
<?php
$db = include('conexion.php');
$item = $_POST['item'];
$nombre = $_POST['nombre'];
$ubicacion = $_POST['ubicacion'];
if (isset($_POST['razon'])) {
  $razon = $_POST['razon'];
} else {
  $razon = null;
}
$fecha = include("fecha.php");

$sql = "INSERT INTO items(item, nombre, ubicacion, razon, fecha, estado) 
VALUES ('{$item}', '{$nombre}', '{$ubicacion}', '{$razon}', '{$fecha}', 'si')";
include("consulta.php");
consultar($sql);
?>