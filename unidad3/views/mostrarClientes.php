<?php

namespace views;
?>

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
                    <table>
                        <thead>
                            <td>Id Cliente</td>
                            <td>Nombre</td>
                            <td>Email</td>
                            <td>Edad</td>
                            <td>Sexo</td>
                        </thead>

                        <?php

                        //Tenemos que generar una fila tr para cada cliente
                        //que tenga el array de datosClientes
                        for ($i = 0; $i < count($datosClientes); $i++) {
                            //Comienzo de fila
                            print("<tr>\n");

                            //Id de cliente
                            print("<td>" . $datosClientes[$i]["idClientes"] . "</td>\n");
                            //Nombre
                            print("<td>" . $datosClientes[$i]["nombre"] . "</td>\n");
                            //Email
                            print("<td>" . $datosClientes[$i]["email"] . "</td>\n");
                            //Edad
                            print("<td>" . $datosClientes[$i]["edad"] . "</td>\n");
                            //Sexo
                            print("<td>" . $datosClientes[$i]["sexo"] . "</td>\n");

                            //Final de fila
                            print("</tr>\n");
                        }


                        ?>



                    </table>

                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>