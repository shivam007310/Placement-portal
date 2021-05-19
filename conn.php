<?php
$host = "remotemysql.com";
$db = "k08TaYRLZp";
$user = "k08TaYRLZp";
$pass = "bQXv4YDu76";
$charset = "utf8mb4";

try {
  $conn = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>