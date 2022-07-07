<?php
$db = include("conexion.php");
$fecha = include("FuncionesPHP/fecha.php");
$item = strtolower($_POST['item']);
$nombre = strtolower($_POST['nombre']);
$devuelvo = strtolower($_POST['devuelvo']);
$razon = strtolower($_POST['razon']);
$fecha_devolucion = $_POST['tiempo'];

/* Podria hacer que segun el valor de devulevo el estado sea si,no,eliminado */
$sql = "UPDATE " . tabla() . " SET estado = 'no' WHERE item = '{$item}'";


/* if ($rta = $db->query($sql)) {
  echo '<script>alert("La operación se ha realizado correctamente")</script>';
} else {
  echo '<script>alert("La operación no se ha realizado")</script>';
  echo $db->connect_error;
} */
include("consulta.php");
consultar($sql, $db);
