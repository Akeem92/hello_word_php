<?php
  echo 'Bienvenu dans docker'; 
?>
<br>
<?php

  $host = 'db';
  $user = 'root';
  $password = 'root';
  $db = 'test_db';

  $conn = new mysqli($host, $user, $password, $db);
  if($conn->connect_error){
    echo 'Connection failed' . $conn->connect_error;
  }
  echo 'Sucessfuly connected to MySql';

  $conn->query("create table Clients(id int, nom varchar(255), prenom varchar(255));");
  $conn->query("insert into Clients(id, nom, prenom) values (1, 'Paul', 'Bernard'), (2, 'Frejus', 'Segla');");
?>

<?php
  $query = "select * from Clients;";
    
  $queryResult = $conn->query($query);

  echo "<table>";
  while ($queryRow = $queryResult->fetch_row()) {
      echo "<tr>";
      for($i = 0; $i < $queryResult->field_count; $i++){
          echo "<td>$queryRow[$i]</td>";
      }
      echo "</tr>";
  }
  echo "</table>";
  $conn->close();
?>
