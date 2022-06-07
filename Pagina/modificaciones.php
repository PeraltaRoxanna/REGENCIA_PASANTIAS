<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificaciones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos/estilos2.css">
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
          <a class="nav-link active" href="modificaciones.php">Agregar/Devolver</a>
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
    <main>
      <h2 style="margin-top: 0;">Agregar/Devolver Algo</h2>
      <!-- Creo que es mejor tener 2 paginas con agregar y con devolver -->
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Item</span>
        <input type="text" class="form-control" placeholder="Inserte elemento a buscar" aria-label="Username" required
          aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Resultado</span>
        <input type="text" class="form-control" placeholder="Item buscado" aria-label="Username" required
          aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Quien sos?</span>
        <input type="text" class="form-control" placeholder="Nombre y apellido" aria-label="Username" required
          aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" type="button">Devuelvo</button> <!-- no tiene que tener fecha, por ahí un registro de que sacaron -->
        <button class="btn btn-outline-secondary" type="button">Agrego algo nuevo</button>
        <!-- <input type="time" class="form-control" placeholder="" aria-label="Example text with two button addons"> -->
      </div>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
          style="height: 100px"></textarea>
        <label for="floatingTextarea2">Razón/Comentario</label>
      </div> <!-- hay que sacar la esquinita interactiva -->
       <div class="input-conteiner">
          <input type="submit" value="Agregar" class="btn btn-primary">
        </div>
    </main>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>