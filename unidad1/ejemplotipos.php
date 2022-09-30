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

    $numero1 = "23";
    $numero2 = 34;
    $x = 59.85;
    var_dump($x);

    //Definición de un array
    $cars = array("Volvo", 23.4, "Toyota");
    var_dump($cars);

    //Para acceder a una posicion especifica dentro un array utilizamos []
    //El primer elemento empieza por 0
    echo $cars[1];

    //Cuidadin con el orden de operadores
    //https://www.php.net/manual/es/language.operators.precedence.php
    echo "<br/>".$numero1+$numero2;

    $nombre_modulo = "Desarrollo Entorno Servidor";

    echo "<br/> La longitud de la cadena es ".strlen($nombre_modulo);

    echo "<br/> La cadena tiene ".str_word_count($nombre_modulo)." palabras";

    echo "<br/> La primera e esta en la posicion ".(strpos($nombre_modulo,"n")+1);

    $cantidad;
    $nombre_modificado = str_replace("or","ar",$nombre_modulo,$cantidad);

    echo "<br/>".$nombre_modificado;
    echo "<br/>$cantidad modificadas";




    ?>
</body>

</html>