<?php 

include_once("../conn.php");

$nome = "Carlos";
$idade = 40;
$universidade = "FIAP";

$stmt = $con->prepare("INSERT INTO testando (nome, idade, universidade) VALUES (?, ?, ?)");

$stmt->bind_param("sis", $nome, $idade, $universidade);

$stmt->execute();

$con->close();

?>
