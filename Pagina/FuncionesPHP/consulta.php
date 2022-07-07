<?php
function consultar($consulta, $db)
{
  if ($db->query($consulta)) {
    echo '<script>
    const aler = document.querySelector(".alert").focus();
    const txt = document.querySelector(".alert-txt").innerHTML = "La operación se ha realizado correctamente";
  </script>';
  } else {
    echo '<script>
    const aler = document.querySelector(".alert").focus();
    const txt = document.querySelector(".alert-txt").innerHTML = "La operación no se ha realizado :(";
  </script>';
  }
}
