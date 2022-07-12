<!-- LA F es por funcion -->
<?php
$devolver = false;
$item = strtolower($_POST['item']);
$armario = strtolower($_POST['select_armario']);
$estante = strtolower($_POST['select_estante']);
/* $nombre = strtolower($_POST['nombre']);
$ubicacion = strtolower($_POST['ubicacion']); */
if (isset($_POST['razon'])) {
  $razon = $_POST['razon'];
} else {
  $razon = null;
}
$fecha = include("fecha.php");

/* $sql = "INSERT INTO " . tabla() . "(item, nombre, ubicacion, razon, fecha, estado) 
VALUES ('{$item}', '{$nombre}', '{$ubicacion}', '{$razon}', '{$fecha}', 'si')"; */
$sql = "call AgregarItem('$item');";
$sql2 = "call agregarItemEstante('$item');";
include("consulta.php");
consultar($sql, $db, $devolver);
consultar($sql2, $db, $devolver);
?>