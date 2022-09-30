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
        $edad=6;
        $nota=2324.5634;
        $nombre_persona="Pedro";

        //Ejemplo de concatenación de cadenas y variables utilizando .
        echo "La edad de ".$nombre_persona." es ".$edad."\n<br/>";
        echo $nombre_persona."'s age is almost ".$edad."<br/>";

        echo "\nLa edad de $nombre_persona es $edad";
        echo "{$nombre_persona}s age is $edad";

        echo "<br/>La nota es $nota";
/* Con printf podemos mostrar los valores formateados, se utiliza en la cadena de
* texto un % y una letra que indica el tipo de dato, los tipos mas tipo
* %d - entero %f - float %s -string*/
        printf("<br/>La nota de %s es %.2f",$nombre_persona,$nota);


    ?>
</body>
</html>