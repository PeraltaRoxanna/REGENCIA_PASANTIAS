<?php
function tabla()
{
  /* para solo cambiar la tabla de todas las consultas desde aca */
  return "items";
}

$db = new mysqli("localhost", "root", "", "test");

if ($db->connect_error) {
  echo "Error de conexión" . $db->connect_error;
} else {
  /* echo "Conexión exitosa"; */
  return $db;
}
