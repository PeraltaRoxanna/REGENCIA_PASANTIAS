<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base de datos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">

</head>

<body>
  <div class="alert-conteiner">
    <!-- Para hacer focus a un elemento que no sea un input debo de tener un tabindex
  y le pongo el -1 porque así no es accesible por teclado. Solo es a partir del 0 -->
    <div class="alert" tabindex="-1">
      <p class="alert-txt">La operacion se ha realizado correctamente (test)</p>
      <input type="button" value="Aceptar" class="btn btn-primary">
    </div>
    <div class="alert-bg"></div>
  </div>
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
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </span>
      <input type="text" class="form-control" placeholder="Item ha buscar" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <input onclick="focusAlert()" class="boton" type="button" value="ON"></input>
  </form>
  <!-- JavaScript Bundle with Popper -->
  <script src="js/bootstrap.js"></script>
  <script type="text/javascript">
    const btn = document.querySelector(".boton");
    const aler = document.querySelector(".alert");
    btn.addEventListener("click", () => {
      aler.focus();
    });
  </script>
</body>

</html>