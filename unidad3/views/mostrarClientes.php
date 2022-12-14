<?php

namespace views;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<?php

if ($mensaje!=null && isset($mensaje))
{
    print("<script>alert('".$mensaje."');</script>");
}

?>

</head>

<body>

    <form method="POST" action="#">

        <div class="container">

            <div class="row">

                <button class="button" value="Añadir Cliente"></button>
                <div class="col-lg-9 col-sm-9">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Id Cliente</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Sexo</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            //Tenemos que generar una fila tr para cada cliente
                            //que tenga el array de datosClientes
                            for ($i = 0; $i < count($datosClientes); $i++) {
                                //Comienzo de fila
                                print("<tr>\n");

                                //Id de cliente
                                print("<td scope='row'>" . $datosClientes[$i]["idClientes"] . "</td>\n");
                                //Nombre
                                print("<td>" . $datosClientes[$i]["nombre"] . "</td>\n");
                                //Email
                                print("<td>" . $datosClientes[$i]["email"] . "</td>\n");
                                //Edad
                                print("<td>" . $datosClientes[$i]["edad"] . "</td>\n");
                                //Sexo
                                print("<td>" . $datosClientes[$i]["sexo"] . "</td>\n");

                                //Para cada cliente creamos un boton para eliminarlo
                                //que llamara al controlador borrarCliente y le pasara el id
                                print("<td>\n");
                                print("<form method='POST' action='../controller/borrarCliente.php'>");
                                print("<input type='hidden' name='idClientes' value='".$datosClientes[$i]["idClientes"]."'/>");
                                print("<button class='button'>Eliminar</button>");                                
                                print("</form>");
                                print("</td>\n");

                                print("<td>\n");
                                print("<form method='POST' action='../controller/actualizarCliente.php'>");
                                print("<input type='hidden' name='idClientes' value='".$datosClientes[$i]["idClientes"]."'/>");
                                print("<input type='hidden' name='nombre' value='".$datosClientes[$i]["nombre"]."'/>");
                                print("<input type='hidden' name='email' value='".$datosClientes[$i]["email"]."'/>");
                                print("<input type='hidden' name='edad' value='".$datosClientes[$i]["edad"]."'/>");
                                print("<input type='hidden' name='sexo' value='".$datosClientes[$i]["sexo"]."'/>");
 
                                print("<button class='button'>Modificar</button>");                                
                                print("</form>");
                                print("</td>\n");                             
                                //Final de fila
                                print("</tr>\n");
                            }


                            ?>


                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>