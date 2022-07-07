<?php
$db = include("conexion.php");
$buscado = strtolower($_POST['buscar']);


$sql = "SELECT * FROM " . tabla() . " WHERE item LIKE '%" . $buscado . "%'";
if ($rta = $db->query($sql)) {
  while ($resultado = $rta->fetch_assoc()) { ?>
    <!-- voy a tener que hacer un array con 3 p y un flexbox para que quede piola. O un grid -->
    <!-- voy a intentar el grid asi pruebo con grid-flow infinito -->
    <p class="search-rta-p"><?php echo $resultado['item']; ?> - <?php echo $resultado['ubicacion'] ?></p>

<?php /* break; */
  }
} else {
  echo "conec problem " . $buscado;
}



/* while ($resultado = mysqli_fetch_assoc($rta)) {
  echo '<p class ="">' . $resultado['item'] . '  -  ' . $resultado['ubicacion'] . '</p>';
} */


/* while ($resultado = $rta->fetch_assoc()) { ?>

  <p class="">hola <?php echo $resultado['item']; ?></p>

<?php } */
