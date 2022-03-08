<?php 

include_once("conexao.php");

$stmt = $conexao->prepare("INSERT INTO pessoas(nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)");

$nome = "Luiz Henrique";
$sobrenome = "Soares de Matos";
$idade = 18;

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":idade", $idade);

$stmt->execute();


?>