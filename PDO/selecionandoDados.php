<?php 

include_once("conexao.php");

$id = 5;

$stmt = $conexao->prepare("SELECT * FROM pessoas WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

// $result = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($result);

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($data);

?>