<?php
require "./config.php";

// $descricao = $_GET["descricao"];
// $valor = $_GET["valor"];
// $data_mvto = $_GET["data_mvto"];
// $categoria = $_GET["categoria"];

$sql = "SELECT * FROM receitas";
$sql = $pdo->prepare($sql);
$sql->execute();

echo "<pre>";
print_r($sql->fetchAll(PDO::FETCH_ASSOC));
