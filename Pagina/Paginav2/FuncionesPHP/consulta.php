<?php
/* si estoy genera problema le puedo pedir un numero para que solo ejecute el script en el ultimo */
function consultar($consulta, $db, $devolver)
{
  if ($rta = $db->query($consulta)) {
    echo '<script>
    const aler = document.querySelector(".alert").focus();
    const txt = document.querySelector(".alert-txt").innerHTML = "La operación se ha realizado correctamente";
  </script>';
  } else {
    echo '<script>
    const aler = document.querySelector(".alert").focus();
    const txt = document.querySelector(".alert-txt").innerHTML = "La operación no se ha realizado :(";
  </script>';
    if ($devolver == true) {
      return $rta;
    }
  }
}
