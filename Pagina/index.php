<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base de datos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- <link rel="stylesheet" href="estilos/estilos2.css"> -->
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
</head>

<body>
  <!-- conteiner del nav/barra de navegacion -->
  <section class="nav-conteiner">
    <!--Barra de busqueda-->
    <nav class="nav-btn">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agregar.php">Agregar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="devolver.php">Devolver</a>
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
    <!-- titulo de la pagina en el nav -->
    <article class="nav-title">
      <h1>Base de datos</h1>
    </article>
  </section>
  <!-- contenedor main.  -->
  <form method="post" action="">
    <h2>Buscar Item</h2>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">Buscador</span>
      <input type="text" class="form-control" placeholder="Item ha buscar" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
  </form>
  <!-- JavaScript Bundle with Popper -->
  <script src="js/bootstrap.js"></script>
</body>

</html>