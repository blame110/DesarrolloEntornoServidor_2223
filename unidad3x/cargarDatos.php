<?php
//Recuperamos del get el usuario
if (isset($_GET["idUser"])) {
    $idUsuario = $_GET["idUser"];

    //Tendriamos que acceder a BD pero no lo hemos visto
    //Directamente si el id es 2 mostramos los datos de un
    //usuario inventado
    if ($idUsuario==2)
     print "Pedro Suarez vive en España y tiene 34 años";

} else
    print("Error de carga");
