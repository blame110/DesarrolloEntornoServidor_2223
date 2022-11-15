<?php

require("conexion.php");

//Conectamos a BD
$mbd = conectar();

$sentencia = $mbd->prepare("INSERT INTO category (name,last_update) VALUES (:name, :lastupdate)");
$sentencia->bindParam(':name', $nombre);
$sentencia->bindParam(':lastupdate', $valor);
try {
// insertar una fila
$nombre = 'Ajos';
$valor = date('Y-m-d H:i:s');
$sentencia->execute();

// insertar otra fila con diferentes valores
$nombre = 'Melones';
$valor = date('Y-m-d H:i:s');
$sentencia->execute();
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>