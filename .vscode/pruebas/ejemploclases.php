<?php

class Persona {
private $nombre;
public $edad;

/**
 * [Description for __construct]
 *
 * @param mixed $nombre
 * @param mixed $edad
 * 
 */
public function __construct($nombre,$edad)
{
    $this->nombre =$nombre;
    $this->edad=23;
}

public function setEdad($ed)
{
    $this->edad=$ed;
}

}

$jose = new Persona("Jose",34);

echo var_dump($jose);

$jose->setEdad(26);

echo "Hola ".$jose->edad;


?>
