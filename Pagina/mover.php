<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mover</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
</head>

<body>
  <script src="FuncionesPHP/ajajax.js"></script>
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
          <a class="nav-link" href="sacar.php">Sacar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="mover.php">Mover</a>
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
  <form method="post" action="" class="main">
    <h2>Mover items</h2>
    <!-- buscador -->
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </span>
      <input onkeyup="buscador($('#rta').val());" name="rta" id="rta" type="text" class="form-control" placeholder="Item ha buscar" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <!-- resultado buscador (on keyup buscador) -->
    <!-- si lo hago con focus apenas selecciono un item ya desaparece y lo puedo hacer con css unicamente
  pero al apretar el input aparece el buscador aunque no haya puesto nada. Podría activar el focus con js
y reaccionar a el con css??? -->
    <div class="search-rta">
      <h5>Resultados encontrados:</h5>
      <div class="search-rta-p"></div>
      <script type="text/javascript">
        function buscador(buscar) {
          setDisplay();
          /* let bus = $(buscar).val(); */
          var parametro = {
            "buscar": buscar
          };
          $.ajax({
            data: parametro,
            type: 'POST',
            url: 'FuncionesPHP/buscador.php',
            success: function(data) {
              /* document.getElementById("rta").innerHTML = data; */
              document.querySelector(".search-rta-p").innerHTML = data;
            }
          });
        }
      </script>
    </div>
    <!-- h2 nueva ubicacion -->
    <!-- selecs con ubicaciones -->
    <!-- boton mover -->
  </form>
  <script>
    const focused = document.querySelector(".search-rta");
    const searcher = document.querySelector("#rta");

    focused.addEventListener("click", () => {
      focused.setAttribute("style", "display:none;")
    });

    function setDisplay() {
      focused.setAttribute("style", "display:block;")
    }

    function setSearch(txt_php) {
      /* let p = document.querySelector(".search-select").innerHTML; */
      searcher.value = txt_php;
    }
  </script>
  <script src="js/bootstrap.js"></script>
</body>

</html>