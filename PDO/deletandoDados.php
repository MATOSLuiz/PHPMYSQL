<?php 

include_once("conexao.php");

$id = 1;

$stmt = $conexao->prepare("DELETE FROM pessoas WHERE id = :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

?>