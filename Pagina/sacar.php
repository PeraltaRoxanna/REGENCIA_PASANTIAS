<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sacar</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- <link rel="stylesheet" href="estilos/estilos2.css"> -->
  <link rel="stylesheet" href="estilos/estilos_all_pages.css">
</head>

<body>
  <section class="nav-conteiner">
    <nav class="nav-btn">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Buscar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agregar.php">Agregar</a>
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
  <form method="post" action="">
    <h2 style="margin-top: 0;">Sacar Algo</h2>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">Item</span>
      <input type="text" class="form-control" placeholder="Inserte elemento a buscar" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">Resultado</span>
      <input type="text" class="form-control" placeholder="Item buscado" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text" id="basic-addon1">Quien sos?</span>
      <input type="text" class="form-control" placeholder="Nombre y apellido" aria-label="Username" required aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
    </div>
    <div class="input-group mb-3">
      <button class="btn btn-outline-secondary" type="button">Devuelvo</button>
      <button class="btn btn-outline-secondary" type="button">No devuelvo</button> <!-- poner disabled el input -->
      <input type="time" class="form-control" placeholder="" aria-label="Example text with two button addons">
    </div>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      <label for="floatingTextarea2">Razón/Comentario</label>
    </div> <!-- hay que sacar la esquinita interactiva -->
    <div class="input-conteiner">
      <input type="submit" value="Sacar" class="btn btn-primary">
    </div>
  </form>


  <script src="js/bootstrap.js"></script>
</body>

</html>