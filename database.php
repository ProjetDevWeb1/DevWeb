<?php
$servername = "localhost";
$username = "root";
$password = "root";

public function getConnection() {
  try {
    $conn = new PDO("mysql:host=$servername;dbname=teyabeille", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    } catch(PDOException $e) {
    die("Connection failed:" . $e->getMessage());
  }
}
?>
