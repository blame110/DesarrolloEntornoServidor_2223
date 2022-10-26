<!DOCTYPE html>
<html>

<head>
    <?php
    //    $RUTACSS = $_REQUEST["PathCss"];
    //  $template = $_REQUEST["cssTemplate"];
    ?>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php //echo "$RUTACSS/$template" 
                                                                ?>'>
    <script src='main.js'></script>
</head>

<body>
    <?php
    $cad1 = "12";
    $num1 = 12;
    //Comparacion normal nos convierte los tipos de datos y comprueba
    if ($cad1 == $num1) {
        echo "Las variables son iguales";
    } else {
        echo "Las variables son distintas";
    }
    //Comparación estricta tienen que tener el mismo tipo de dato
    if ($cad1 === $num1) {
        echo "Las variables son iguales";
    } else {
        echo "Las variables son distintas";
    }
    ?>
    <!-- Select de la edad con los numeros pares-->
    <label for="edad">Edad</label>
    <select id="edad" name="edad">
        <?php
        //opcion limpia con pares
        for ($i = 2; $i < 121; $i = $i + 2) {
            print("<option value='$i'>$i</option>");
        }
        ?>
    </select>

    <select id="edad" name="edad">
        <?php
        for ($i = 2; $i < 121; $i++) {
            //Si es impar saltamos y no lo añadimos al desplegable
            if ($i % 2 != 0)  continue;

            print("<option value='$i'>$i</option>");
        }
        ?>
    </select>

</body>

</html>