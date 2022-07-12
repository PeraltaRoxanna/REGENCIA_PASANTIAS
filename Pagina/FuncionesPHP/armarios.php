<?php
include('consulta.php');
$sql = "";
$devolver = true;

$rta = consultar($sql_armario, $db, $devolver);
$cant = mysqli_num_rows($rta);

while ($rows = mysqli_fetch_row($rta)) {
  for ($i = 0; $i != $cant; $i++) {
    echo "<option value='" . $i + 1 . "'>" . $rows[$i] . "</option>";
  }
}
