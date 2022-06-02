<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base de datos</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="estilos/estilos2.css">
</head>

<body>
  <h1>Base de datos</h1>
  <h2>Buscar Item</h2>
  <form action="GET">
    <div class="form-conteiner">
      <!-- <div class="input-conteiner txt search">
        <input type="text" placeholder="Item">
      </div> -->
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Item</span>
        <input type="text" class="form-control" placeholder="Inserte elemnento a buscar" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$" >
      </div>
      <div class="input-conteiner select">
        <select name="" id="" class="form-select">
          <option value="" selected disabled>Armario</option>
          <!-- los valores tienen que venir de la DB -->
<!--           <option value="">Armario_1_TT_izq</option>
          <option value="">Armario_2_TM_med</option>
          <option value="">Armario_3_TN_der</option>
          <option value="">Armario_4_der</option>
          <option value="">Armario_4_izq</option> -->
        </select>
      </div>
      <div class="input-conteiner select">
        <select name="" id="" class="form-select">
          <option value="" selected disabled>Estante</option>
        </select>
      </div>
      <div class="input-conteiner">
        <input type="submit" name="" id="" value="Sacar" class="btn btn-primary">
      </div>
    </div>
  </form>
  <h2>Modificaciones</h2>
  <h3>Meter algo</h3>
  <form action="GET">
    <div class="form-conteiner">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Item</span>
        <input type="text" class="form-control" placeholder="Inserte el nuevo elemento" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-conteiner select">
        <select name="" id="" class="form-select">
          <option value="" selected disabled>Armario</option>
        </select>
      </div>
      <div class="input-conteiner select">
        <select name="" id="" class="form-select">
          <option value="" selected disabled>Estante</option>
        </select>
      </div>
      <div class="input-conteiner">
        <input type="submit" value="Meter" class="btn btn-primary">
      </div>
    </div>
  </form>
  <h3>Sacar algo</h3>
  <form action="GET">
    <div class="form-conteiner">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="basic-addon1">Item</span>
        <input type="text" class="form-control" placeholder="Seleccione el elemento que va a sacar" aria-label="Username" aria-describedby="basic-addon1" title="nada de carácteres raros" pattern="^[0-9A-Za-záéíóúÁÉÍÓÚÑñ/s,._,-]+$">
      </div>
      <div class="input-conteiner select">
        <select name="" id="" class="form-select">
          <option value="" selected disabled>Armario</option>
        </select>
      </div>
      <div class="input-conteiner select">
        <select name="" id="" class="form-select">
          <option value="" selected disabled>Estante</option>
        </select>
      </div>
      <div class="input-conteiner">
        <input type="submit" value="Sacar" class="btn btn-primary">
      </div>
    </div>
  </form>


</body>

</html>