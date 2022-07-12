<?php
$db = include("conexion.php");
$buscado = strtolower($_POST['buscar']);
$item_camp = "descripcion";
$ubic_camp = "";


/* y agregar where estado = visible */
$sql = "SELECT item, ubicacion FROM " . tabla() . " WHERE item LIKE '%" . $buscado . "%' OR ubicacion LIKE '%" . $buscado . "%'";
$sql = "SELECT $item_camp FROM items WHERE $item_camp LIKE '%$buscado%'";
if ($rta = $db->query($sql)) {
  while ($resultado = $rta->fetch_assoc()) { ?>
    <p><?php echo $resultado[$item_camp]; ?> </p>
    <!-- <p> <?php /* echo $resultado['ubicacion'] */ ?></p> -->
<?php /* break; */
  }
} else {
  echo "ERROR: " . $buscado;
}



/* while ($resultado = mysqli_fetch_assoc($rta)) {
  echo '<p class ="">' . $resultado['item'] . '  -  ' . $resultado['ubicacion'] . '</p>';
} */


/* while ($resultado = $rta->fetch_assoc()) { ?>

  <p class="">hola <?php echo $resultado['item']; ?></p>

<?php } */
