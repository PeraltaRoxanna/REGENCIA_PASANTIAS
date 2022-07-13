<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sacar</title>
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
    <nav class="nav-btn">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="crear.php">Crear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="devolver.php">Devolver</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sacar.php">Sacar</a>
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
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
    <h2 style="margin-top: 0;">Retirar</h2>
    <!-- acá por ser devolver solo se debería mostrar lo que tenga estado "no" -->
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </span>
      <input name="item" required type="text" class="form-control" placeholder="Inserte elemento a buscar" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <!-- esto sería el resultado del buscado. No manda nada al srvidor -->
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
        </svg>
      </span>
      <input type="text" class="form-control" placeholder="Item buscado" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>
      </span>
      <input name="nombre" required type="text" class="form-control" placeholder="Nombre y apellido" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <div class="input-group mb-3">
      <input id="btn1" required type="radio" name="devuelvo" value="si" hidden>
      <label for="btn1" class="btn btn-outline-secondary" type="button">Devuelvo</label>
      <input id="btn2" required type="radio" name="devuelvo" value="no" hidden>
      <label for="btn2" class="btn btn-outline-secondary" type="button">No devuelvo</label>
      <input name="tiempo" type="time" class="form-control" placeholder="" aria-label="Example text with two button addons">
    </div>
    <div class="form-floating">
      <textarea name="razon" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Razón/Comentario</label>
    </div> <!-- hay que sacar la esquinita interactiva -->
    <div class="input-conteiner">
      <input type="submit" value="Sacar" class="btn btn-primary">
    </div>
  </form>
  <script src="js/bootstrap.js"></script>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("FuncionesPHP/Fsacar.php");
  }
  ?>
</body>

</html>