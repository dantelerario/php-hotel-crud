<?php
//setup
$server_name = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'hoteldb';

//conn
$conn = new mysqli($server_name, $username, $password, $db_name);

//check conn
if ($conn && $conn->connect_error) {
  die('Errore di connessione');
}

echo 'Hello db';
 ?>
