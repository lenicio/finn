<?php

$name = "finn";
$host = "localhost";
$user = "root";
$pass = "dc@f0876";

try {
  $pdo = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
} catch (PDOException $e) {
  echo "ERRO: " . $e->getMessage();
}
