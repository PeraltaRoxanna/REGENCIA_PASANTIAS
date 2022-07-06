<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificaciones</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
</head>

<body>
  <div class="alert-conteiner">
    <div class="alert" tabindex="-1">
      <p class="alert-txt">La operación se ha realizado correctamente (test)</p>
      <input type="button" value="Aceptar" class="btn btn-primary">
    </div>
    <div class="alert-bg"></div>
  </div>

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
        <span class="input-group-text" id="basic-addon1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
          </svg>
        </span>
        <input name="item" required type="text" class="form-control" placeholder="¿Qué elemento devuelve?" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <!-- la ubicacion solo mostraría donde estaba antes. No se envia al servidor -->
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          </svg>
        </span>
        <input type="text" class="form-control" placeholder="Donde deja el item" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          </svg>
        </span>
        <input name="nombre" required type="text" class="form-control" placeholder="Nombre y apellido de quien devuelve" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
        <!-- La razon es medio al pedo, no creo que nadie deje un comentario aunque es probable -->
      </div>
      <div class="form-floating">
        <textarea name="razon" class="form-control" id="floatingTextarea2" style="height: 100px;" placeholder="COMENTARIO"></textarea>
        <!-- <textarea name="" id="pruarea" cols="25" rows="10" resize=""></textarea> -->
        <label for="floatingTextarea2">Razón/Comentario</label>
      </div> <!-- hay que sacar la esquinita interactiva -->
      <div class="input-conteiner">
        <input type="submit" value="Agregar" class="btn btn-primary">
      </div>
    </form>
  </section>
  <script src="js/bootstrap.js"></script>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("FuncionesPHP/Fdevolver.php");
  }
  ?>
</body>

</html>