<!-- NOMBRE  DE LOS CAMPOS -->
<?php
$p = 0; /* posision array */
$sql = "DESCRIBE " . tabla();
$cant = 0;

if ($rta = $db->query($sql)) {
  while (true) {
    $fields[$p] = $rta->fetch_assoc();
    if (!isset($fields[$p]['Field'])) {
      break;
    } else {
      if ($p == 0) {
      } else {
        echo '<th>' . $fields[$p]['Field'] . '</th>';
      }
    }
    $p++;
  }
} else {
  echo "hubo un error: " . $db->connect_error;
}
?>