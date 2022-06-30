<?php
$db = include("conexion.php");
$p = 0;
$p_one = 1;
$cant_cols = -1;
/* la consulta que queremos mostrar */
$sql = "SELECT * FROM personas";
$rta = $db->query($sql);
/* consultado la cantidad de columnas */
$col_sql = "DESCRIBE personas";
$col_rta = $db->query($col_sql);

/* sacando la cantidad de columnas */
while (true) {
  $columnas = $col_rta->fetch_assoc();
  if (!isset($columnas['Field'])) {
    break;
  } else {
    $rtn[$p] = $columnas['Field'];
    echo $rtn[$p]->pars;
    $p++;
    $cant_cols++;
  }
}
$p = 0;
/* Cantidad de filas */
$cant_rows = mysqli_num_rows($rta);

/* Row array */


/* creando las filas */
while ($cant_rows != 0) {
  $p = 0;
  $p_one = 1;
  echo "<tr>";
  for ($i = $cant_cols; $i != 0; $i--) {
    $rows[$p] = $rta->fetch_assoc();
    echo "<td>" . $rows[$p][$rtn[$p]] . "</td>";
    $p++;
    $p_one++;
  }
  echo "</tr>";
  $cant_rows--;
}
