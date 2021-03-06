<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
</head>

<body>
  <?php $db = include("FuncionesPHP/conexion.php"); ?>
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
          <a class="nav-link" href="sacar.php">Sacar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mover.php">Mover</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="registro.php">Registro</a>
        </li>
      </ul>
    </nav>
    <article class="nav-title">
      <h1>Base de datos</h1>
    </article>
  </section>
  <form method="post" action="" style="display: block;" class="main">
    <h2>Registro de movimientos</h2>
    <div style="overflow: auto; height:100%;">
      <table class="table-fixed">
        <thead>
          <tr>
            <?php include("FuncionesPHP/fields.php"); ?>
          </tr>
        </thead>
        <tbody>
          <?php include("FuncionesPHP/registro-consulta.php") ?>
        </tbody>
      </table>
    </div>
  </form>

  <script src="js/bootstrap.js"></script>
</body>

</html>