<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=teyabeille", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = 'SELECT nom, type FROM abeille ORDER BY id';
  foreach ($conn->query($sql) as $row) {
    echo $row [ 'nom' ] . "\n";
    echo $row [ 'type' ] . "\t";
  }

?>

