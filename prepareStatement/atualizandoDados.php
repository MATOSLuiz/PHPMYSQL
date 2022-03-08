<?php 

include_once("../conn.php");

$id = 2;

$stmt = $con->prepare("UPDATE testando SET nome = ?, idade = ?, universidade = ? WHERE id = ?");

$nome = "Carlota";
$idade = 18;
$universidade = "USP";

$stmt->bind_param("sisi", $nome, $idade, $universidade,$id);

$stmt->execute();

?>