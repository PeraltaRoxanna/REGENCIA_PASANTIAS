<?php
$db = include("conexion.php");
$p = 0;
$cant_cols = -1;
/* la consulta que queremos mostrar */
$sql="SELECT * FROM personas";
$rta = $db->query($sql);
/* consultado la cantidad de columnas */
$col_sql = "DESCRIBE personas";
$col_rta =$db->query($col_sql); 


/* sacando las columnas */
while(true){
$columnas = $col_rta->fetch_assoc();
echo count($columnas['Field']);
$p++;
if(!isset($columnas)){
  break;
}else{
  $cant_cols++;
}
}
$p = 0;

/* creando las filas */
while($cant != 0){
  $rows[$p] = $rta->fetch_assoc();
  echo "<td>".$rows[$p]['nombre']."<td>";
  $p++;
  $cant--;
}
?>