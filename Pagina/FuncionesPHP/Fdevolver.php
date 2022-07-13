<?php
$devolver = false;
$db = include("conexion.php");
$fecha = include("fecha.php");
/* depende de lo que encuentre el buscador */
$item = strtolower($_POST['item']);
/* la ubicacion tiene que saverla el cliente, no yo.
AUNQUE si para el historial o podria hacer una relacion.
Tecnicamente NO hacer la relacion es meter datos al pedo*/
/* $ubicacion = $_POST['ubicacion']; */
$nombre = strtolower($_POST['nombre']); /* quien devuelve */
/* Me parece que re al pedo la razon en devolver */
$razon = strtolower($_POST['razon']);

$sql = "UPDATE " . tabla() . " SET estado = 'si' WHERE item = '$item'";

/* yo no debería de tocar nada del historial, eso sería full procedure */

/* $sql_historial = "INSERT INTO historial (item, nombre, fecha)
VALUES ('$item', '$nombre', '$fecha')";

if ($rta = $db->query($sql)) {
  echo '<script>alert("La operación se ha realizado correctamente")</script>';
} else {
  echo '<script>alert("La operación no se ha realizado")</script>';
} */

include("consulta.php");
consultar($sql, $db, $devolver);
