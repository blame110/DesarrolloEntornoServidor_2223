<?php
//Para recuperar una variable que nos envia un formulario
//utilizamos la supervariable $_GET que contiene todos los datos
//echo $_GET["name"];


//Para recuperar una variable que nos envia un formulario
//utilizamos la supervariable $_POST que contiene todos los datos
//echo $_POST["name"];

//Request recupera los datos enviados de cualquier forma
//echo $_REQUEST["name"];
//echo $_REQUEST["gender"];

//Antes de utilizar un valor de un formulario es importante comprobar
//Que la variable tiene contenido y tambien limpiarla de posibles
//codigos peligrosos y caracteres extraños
if (isset($_POST["name"]))
{
    echo "se ha pasado name via post y su valor es {$_POST["name"]}<br/>";
}
else
    echo "El post no tiene la variable name";

if (isset($_POST["comentarios"]))
{
    $comentarios = $_POST["comentarios"];
    $lineas = explode("\n",$comentarios);
    var_dump($lineas);
    echo "<br/>se ha pasado name via post y su valor es {$_POST["comentarios"]}";
}
else
    echo "El post no tiene la variable name";

?>