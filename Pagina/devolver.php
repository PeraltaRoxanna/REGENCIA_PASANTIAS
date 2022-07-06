<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificaciones</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
  <?php
  include("FuncionesPHP/conexion.php");
  ?>
</head>

<body>
  <section class="nav-conteiner">
    <!-- barra de busqueda -->
    <nav class="nav-btn">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agregar.php">Agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="devolver.php">Devolver</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sacar.php">Sacar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mover.php">Mover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Registro</a>
        </li>
      </ul>
    </nav>

    <article class="nav-title">
      <h1>Base de datos</h1>
    </article>
  </section>
  <section class="main-conteiner">
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <h2 style="margin-top: 0;">Devolver</h2>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Item</span>
        <input type="text" class="form-control" placeholder="¿Qué elemento devuelve?" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Ubicación</span>
        <input type="text" class="form-control" placeholder="Donde deja el item" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Quien Devuelve</span>
        <input type="text" class="form-control" placeholder="Nombre y apellido de quien devuelve" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="form-floating">
        <textarea class="form-control" id="floatingTextarea2" style="height: 100px;" placeholder="COMENTARIO"></textarea>
        <!-- <textarea name="" id="pruarea" cols="25" rows="10" resize=""></textarea> -->
        <label for="floatingTextarea2">Razón/Comentario</label>
      </div> <!-- hay que sacar la esquinita interactiva -->
      <div class="input-conteiner">
        <input type="submit" value="Agregar" class="btn btn-primary">
      </div>
    </form>
  </section>
  <script src="js/bootstrap.js"></script>
</body>

</html>