<?php

require("global/global.php");

function conectar()
{

$conexion=null;

try {
    $conexion = new PDO("mysql:host=".BD_HOST.";dbname=".BD_NAME, BD_USER, BD_PASSWD);
   /* foreach($mbd->query('SELECT * from address') as $fila) {
        print_r($fila);
        echo "\n<br>";
    }*/
    

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
return $conexion;
}
?>