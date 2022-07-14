<?php
$db = include("conexion.php");
$buscado = strtolower($_POST['buscar']);
$item_camp = "descripcion";
$ubic_camp = "";


$sql = "SELECT item, ubicacion FROM " . tabla() . " WHERE item LIKE '%" . $buscado . "%' OR ubicacion LIKE '%" . $buscado . "%'";
$sql = "SELECT $item_camp FROM items WHERE $item_camp LIKE '%$buscado%'";
if ($rta = $db->query($sql)) {
  while ($resultado = $rta->fetch_assoc()) { ?>
    <div class="search-select" onclick="setSearch('<?php echo $resultado[$item_camp]; ?>')">
      <span><?php echo $resultado[$item_camp]; ?> </span>
      <span> ubicacion <?php /* echo $resultado['ubicacion'] */ ?></span>
      <span> estado <?php /* echo $resultado['estado'] */ ?></span>
    </div>
<?php
  }
} else {
  echo "ERROR: " . $buscado;
}
