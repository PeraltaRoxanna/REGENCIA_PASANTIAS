<!-- LA F es por funcion -->
<?php
$db = include('conexion.php');
$item = strtolower($_POST['item']);
$nombre = strtolower($_POST['nombre']);
$ubicacion = strtolower($_POST['ubicacion']);
if (isset($_POST['razon'])) {
  $razon = $_POST['razon'];
} else {
  $razon = null;
}
$fecha = include("fecha.php");

$sql = "INSERT INTO " . tabla() . "(item, nombre, ubicacion, razon, fecha, estado) 
VALUES ('{$item}', '{$nombre}', '{$ubicacion}', '{$razon}', '{$fecha}', 'si')";
include("consulta.php");
consultar($sql, $db);
?>