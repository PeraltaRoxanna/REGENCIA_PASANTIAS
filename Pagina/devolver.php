<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificaciones</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos2.css">
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
  <?php
  include("conexion.php");
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
    <!-- titulo de la pagina en la barra de busqueda -->
    <article class="nav-title">
      <h1>Base de datos</h1>
    </article>
  </section>
  <section class="main-conteiner">
    <!-- contenido de la pagina. va a tener lo necesario para devolver que es:
  que devolver?(buscador), quien devolvio?, un resultado que diga que devolver y donde -->
    <main>
      <h2 style="margin-top: 0;">Devolver Algo</h2>
     <form method="post" action=""></form>
    </main>
  </section>
  <script src="js/bootstrap.js"></script>
</body>

</html>