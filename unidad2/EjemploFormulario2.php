<!DOCTYPE html>
<html>

<head>
  <title>Prueba de Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

  <form>

    <div class="container">

      <div class="row">


        <div class="col-lg-6 col-sm-6">
          <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <!-- enlaces -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Opción 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Opción 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Opción 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Opción 4</a>
              </li>
            </ul>
          </nav>
          <!-- Margenes con mb mr ml mt -sm-distancia-->
          <!-- Misma linea -->
          <div class="form-group row mb-sm-2 mt-sm-2">
            <label for="nombre" class="col-lg-3 col-form-label">Nombre:</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
          </div>

          <div class="form-group row">
            <label for="clave" class="col-lg-3 col-form-label">Ingrese su clave:</label>
            <div class="col-lg-6">
              <input type="password" class="form-control" id="clave" name="clave">
              <!--Comentario al pasar-->
              <small class="form-text text-muted">Debe tener al menos 10 caracteres, de los cuales al menos uno debe ser un número.</small>
            </div>
          </div>

          <div class="form-group ml-3">
            <label for="comentarios">Deje aquí sus comentarios</label>
            <textarea class="form-control mb-3 " rows="5" id="comentarios" name="comentarios"></textarea>
          </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="checkbox4" name="checkbox4">
            <label class="form-check-label" for="checkbox4">
              Opcion 1
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="checkbox5" name="checkbox5">
            <label class="form-check-label" for="checkbox5">
              Opcion 2
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="" id="checkbox3" name="checkbox6">
            <label class="form-check-label" for="checkbox6">
              Opcion 3
            </label>
          </div>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="" id="radio4" name="grupo2">
            <label class="form-check-label" for="radio4">
              Opcion 1
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="" id="radio5" name="grupo2">
            <label class="form-check-label" for="radio5">
              Opcion 2
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" value="" id="radio6" name="grupo2">
            <label class="form-check-label" for="radio6">
              Opcion 3
            </label>
          </div>
          <br>
          <div class="form-check form-switch mt-sm-3">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
            <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
          </div>
          <div class="form-check form-switch mb-sm-3">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
          </div>

          <div class="mb-3">
            <label for="control1">Seleccione un elemento</label>
            <select class="form-control w-25" id="control1" name="control1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="control2">Seleccione varios elementos</label>
            <select multiple class="form-control w-25" id="control2" name="control2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>

          <hr />
          <!--Sombra shadow p-3 mb-5 bg-body rounded-->
          <!-- btn btn-default boton por defecto-->
          <!-- px-4 py-5 pading x e y -->

          <button type="submit" class="btn btn-default mb-sm-2 shadow p-3 mb-5 bg-body rounded px-3 py-2">Enviar</button>


          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Inicio</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item"><a class="page-link" href="#">6</a></li>
            <li class="page-item"><a class="page-link" href="#">Último</a></li>
          </ul>



          <button class="btn btn-warning" href="#politica" data-toggle="collapse">Políticas de privacidad</button>
          <div id="politica" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum.
          </div>

        </div>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>