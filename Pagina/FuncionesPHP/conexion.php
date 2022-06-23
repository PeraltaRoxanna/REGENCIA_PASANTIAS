<?php

$db = new mysqli("localhost","root","","test");

if($db->connect_error){
  echo "Error de conexión". $db->connect_error;
}

else{
  /* echo "Conexión exitosa"; */
  return $db;
}
