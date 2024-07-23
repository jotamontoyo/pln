<?php
  $host_name = 'db5016096055.hosting-data.io';
  $database = 'dbs13106717';
  $user_name = 'dbu2980903';
  $password = 'plnicaragua24%';

  $link = new mysqli($host_name, $user_name, $password, $database);

  if ($link->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $link->connect_error .'</p>');
  } else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
  }
?>