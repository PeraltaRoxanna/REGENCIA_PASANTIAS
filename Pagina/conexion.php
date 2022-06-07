<?php

$db = new mysqli("localhost","root","","regencia");

if($db->connect_errno){
  echo "Error de conexión";
}

else{
  echo "Conexión exitosa";
}
