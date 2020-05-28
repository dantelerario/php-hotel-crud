<?php

include __DIR__ . '/../env.php';

//conn
$conn = new mysqli($server_name, $username, $password, $db_name);



//check conn
if ($conn && $conn->connect_error) {
  die('Errore di connessione');
}


//lista stanze homepage
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);
var_dump($result);

if ($result && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    var_dump($row);
  }
} elseif ($result) {
  echo 'no record';
} else {
  echo 'query error';
}
