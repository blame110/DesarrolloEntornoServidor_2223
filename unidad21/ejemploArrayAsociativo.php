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

$juego = ["title" => "Mario Bross","year" => 1976,"score" => 9,"categoria" => "plataformas"];

$juego["compania"]="Nintendo";

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

<select name="mario">
    <?php
        foreach($juego as $key=>$elemento)
        {
            print "<option value=$key>$elemento</option>\n";
        }

        $claves= array_keys($juego);
      

        foreach($claves as $key)
        {
            print "<option value=$key>$juego[$key]</option>\n";
        }


          //Array push añade un elemento al final del array
          array_push($claves,"duracion");

          //saca el ultimo elemento del array y lo elimina
          $elemento=array_pop($claves);

        

       

    ?>

</select>

<?php
   print var_dump($claves)."<br/>";
   //Unset destruye una variable, si es una posicion de un array tambien, pero queda el hueco
   unset($claves[1]);
   print var_dump($claves)."<br/>";

   //Devuelve los valores de un array asociativo
   //Tambien se utiliza para eliminar los huecos que pueden quedar utilizando unset en arrays
   $claves=array_values($claves);  
   print var_dump($claves)."<br/>";   

?>
</body>
</html>