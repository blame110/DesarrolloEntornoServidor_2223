<?php
use \model\Cliente;
use \model\Utils;
//Creamos un array para guardar los datos del cliente
$cliente = array();

//Borramos el cliente
if (isset($_POST["idClientes"]) && isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["edad"]) && isset($_POST["sexo"]))
{
//rellenamos los datos del cliente que le pasaremos a la vista

$cliente["idClientes"] = $_POST["idClientes"];
$cliente["nombre"] = $_POST["nombre"];
$cliente["email"] = $_POST["email"];
$cliente["edad"] = $_POST["edad"];
$cliente["sexo"] = $_POST["sexo"];

//Con los datos del cliente cargados cargamos la vista
include("../views/modificarClientes.php");


}
else{

//Añadimos el código del modelo
require_once("../model/Cliente.php");
require_once("../model/Utils.php");

$gestorCli = new Cliente();

//Nos conectamos a la Bd
$conexPDO = Utils::conectar();

//Recolectamos los datos de los clientes
$datosClientes = $gestorCli->getClientesPag($conexPDO, true, "idClientes", 1, 10);


//var_dump($datosClientes);
include("../views/mostrarClientes.php");

}



?>