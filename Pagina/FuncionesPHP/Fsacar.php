<?php
$db = include("conexion.php");
$fecha = include("FuncionesPHP/fecha.php");
$item = $_POST['item'];
$nombre = $_POST['nombre'];
$devuelvo = $_POST['devuelvo'];
$razon = $_POST['razon'];
$fecha_devolucion = $_POST['tiempo'];

/* Podria hacer que segun el valor de devulevo el estado sea si,no,eliminado */
$sql = "UPDATE items SET estado = 'no' WHERE item = '{$item}'";


if ($rta = $db->query($sql)) {
  /* si el item no existe o ya tenia el estado en no.Tambien sale esto */
  echo '<script>alert("La operación se ha realizado correctamente")</script>';
} else {
  echo '<script>alert("La operación no se ha realizado")</script>';
  echo $db->connect_error;
}
