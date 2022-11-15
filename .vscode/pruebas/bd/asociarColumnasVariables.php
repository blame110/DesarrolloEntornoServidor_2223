  <?php
  require ("conexion.php");
  //Conectamos a BD
  $gbd = conectar();

  $sql = 'SELECT city, country_id FROM city';
  try {
    $sentencia = $gbd->prepare($sql);
    $sentencia->execute();

    /* Vincular por número de columna */
    $sentencia->bindColumn(1, $ciudad);
     
    /* Vincular por nombre de columna */
    $sentencia->bindColumn('country_id', $identificador);

    while ($fila = $sentencia->fetch(PDO::FETCH_BOUND)) {
      $datos = "$ciudad - $identificador" . "<br/>";
      print $datos;
    }

  }
  catch (PDOException $e) {
    print $e->getMessage();
  }

  ?>