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

  <form method="POST" action="#">

    <div class="container">

      <div class="row">


        <div class="col-lg-9 col-sm-9">

          
          <div class="mb-3">
            <label for="control1">Numero de Filas</label>
            <select class="form-control w-25" id="control1" name="rows">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>



          <div class="mb-3">
            <label for="control1">Numero de columas</label>
            <select class="form-control w-25" id="control1" name="columns">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="control1">Color de Fondo</label>
            <select class="form-control w-25" id="control1" name="color">
              <option value="blue">Azul</option>
              <option value="red">Rojo</option>
              <option value="green">Verde</option>
              <option value="pink">Rosa</option>
              <option value="white">Blanco</option>
            </select>
          </div>

          

          <button type="submit" class="btn btn-default mb-sm-2 shadow p-3 mb-5 bg-body rounded px-3 py-2">Enviar</button>


            <?php
            /**
             * Creamos la tabla dependiendo de las variables que 
             * recibimos por el formulario
             */
            if (isset($_POST["rows"]) && isset($_POST["columns"]) && isset($_POST["color"]))
           {
            $cols=$_POST["columns"];
            $rows=$_POST["rows"];
            $color=$_POST["color"];
            $numCelda=1;

            print("<table style='background-color:$color' class=\"table\"><tbody>");
            //Para cada columna escribimos sus etiquetas tr
            for ($i=0;$i<$rows;$i++)
            {
                print("<tr>");


                //Para cada fila escribiimos sus celdas
                for($j=0;$j<$cols;$j++)
                {
                    print("<td>$numCelda</td>");
                    $numCelda++;
                }

                print("</tr>");
            }

            print("</tbody></table>");
    
           }

            ?>

        </div>
      </div>
    </div>
  </form>

 
  

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>