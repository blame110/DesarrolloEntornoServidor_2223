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

    <?php
    var_dump($_POST);
    //En cadenacomplementaria guardaremos la cadena solucion
    $cadenaComp = "";
    if (isset($_POST["cadena"])) {
        $cadena = $_POST["cadena"];

        for ($i = 0; $i < strlen($cadena); $i++) {
            switch (strtoupper($cadena[$i])) {
                case "A":
                    $cadenaComp = $cadenaComp . "T";
                    break;
                case "T":
                    $cadenaComp = $cadenaComp . "A";
                    break;
                case "C":
                    $cadenaComp = $cadenaComp . "G";
                    break;
                case "G":
                    $cadenaComp = $cadenaComp . "C";
                    break;
            }
        }

        $cadenaComp = "";

        $arrayADN = ["A" => "T", "T" => "A", "C" => "G", "G" => "C"];
    
        for ($i = 0; $i < strlen($cadena); $i++) {
            $cadenaComp = $cadenaComp.$arrayADN[strtoupper($cadena[$i])];
        }
    }

  
    ?>

    <form method="POST" action="#">

        <div class="container">

            <div class="row">


                <div class="col-lg-6 col-sm-6">

                    <!-- Margenes con mb mr ml mt -sm-distancia-->
                    <!-- Misma linea -->
                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="cadena" class="col-lg-5 col-form-label">Cadena Adn:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="cadena" name="cadena">
                        </div>
                    </div>
                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <label for="nombre" class="col-lg-6 justify-content-center col-form-label">Cadena Complementaria:</label>
                        <div class="col-lg-6">
                            <?= $cadenaComp ?>
                        </div>
                    </div>

                    <div class="form-group row mb-sm-2 mt-sm-2">
                        <div class="col-lg-12">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>