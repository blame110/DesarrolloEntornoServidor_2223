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

$juego = ["title" => "Mario Bross","year" => 1976,"score" => 9];



var_dump($juego);

?>

<ul>
    <?php
        $juego["score"]="diez";
        $juego["type"]="Plataformas";
        print "<li>{$juego["title"]}</li>";
        print "<li>{$juego["year"]}</li>";
        print "<li>{$juego["score"]}</li>";
        print "<li>{$juego["type"]}</li>";
    ?>
</ul>
</body>
</html>