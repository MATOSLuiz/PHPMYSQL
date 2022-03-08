<?php 

include_once("conexao.php");

$id = 1;
$nome = "Maria";
$sobrenome = "Estela";
$idade = 14;

$stmt = $conexao->prepare("UPDATE pessoas SET nome = :nome, sobrenome = :sobrenome, idade =:idade WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":idade", $idade);

$stmt->execute();

?>