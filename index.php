<?php
  echo 'Bienvenu dans docker';

  $host = 'localhost';
  $user = 'devuser';
  $password = 'devpass';
  $db = 'test_db';

  $conn = new mysqli($host, $user, $password, $db);
  if($conn->connect_error){
    echo 'Connection failed' . $conn->connect_error;
  }
  echo 'Sucessfuly connected to MySql';
?>
