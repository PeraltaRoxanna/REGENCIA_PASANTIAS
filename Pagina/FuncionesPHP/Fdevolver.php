<?php
$db = include("conexion.php");
/* depende de lo que encuentre el buscador */
$item = $_POST['item'];
$ubicacion = $_POST['ubicacion'];
$nombre = $_POST['nombre']; /* quien devuelve */
$razon = $_POST['razon'];

$sql_estado = "UPDATE `prueba` SET estado = 'si' WHERE item = $item";
$sql_historial = "";
