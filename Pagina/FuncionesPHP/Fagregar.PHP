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
$fecha = date("Y-m-d H:i:s");
/* CHEKEAR ESTO */
echo $fecha;
$sql = "INSERT INTO items(item, nombre, ubicacion, razon, fecha, estado) 
VALUES ('{$item}', '{$nombre}', '{$ubicacion}', '{$razon}', '{$fecha}', 'si')";
if ($rta = $db->query($sql)) {
  echo '<script>alert("La operación se ha realizado correctamente")</script>';
} else {
  echo '<script>alert("La operación no se ha realizado")</script>';
}
?>