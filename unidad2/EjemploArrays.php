<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    $diasSemana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

    $modulos = [["DES", "EINEM", "DEC", "IMP", "DIS"],["DES", "EINEM", "DEC", "IMP", "DIS"],["DES", "EINEM", "DEC", "IMP", "DIS"],["DES", "EINEM", "DEC", "IMP", "DIS"],["DES", "EINEM", "DEC", "IMP", "DIS"]];

    ?>

    <table>
        <tr>
            <?php

            foreach ($diasSemana as $dia)
            {
                print "<th>$dia</th>";
            }

            ?>
        </tr>

        
            <?php
            //Ejemplo, para acceder en un array multidimensional a los datos
            //print $modulos[1][3];

            var_dump($modulos);

           foreach ($modulos as $modulosHora)
            {
                //Escribimos el comienzo de fila
                print "<tr>";
                
                foreach($modulosHora as $modulo)
                {
                    print "<td>$modulo</td>";
                }

                //Escribimos el final de fila
                print "</tr>";
            }

            ?>
        


    </table>

</body>

</html>