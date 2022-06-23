<!-- NOMBRE  DE LOS CAMPOS -->
<?php
$db = require("conexion.php");
$p = 0; /* posision array */
$sql ="SHOW COLUMNS FROM prueba";
$cant = 0;
?>
<table><?php
if($rta = $db -> query($sql)){
  $cant = count($rta->fetch_assoc()) - 1;
  echo $cant;
  for($p = 0; $cant != 0; $p++){
    $fields[$p] = $rta['fields']->fetch_assoc();
    /* $rtn[$p] = '<th>'.$fields[$p].'<th>';
    echo $fields[$p]['nombre']; */
    echo '<th>'.$fields[$p].'<th>';
  }
  //return $rtn[$p];
}else{
  echo "hubo un error";
}










?></table>