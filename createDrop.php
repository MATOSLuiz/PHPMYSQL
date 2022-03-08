<?php 

include_once("conn.php");

$table = "testando";
$nome = "Ana Júlia";
$idade = "17";
$universidade = "UNESP";

$sql = "INSERT INTO $table (nome, idade, universidade) VALUES ('$nome', '$idade', '$universidade')";

$con->query($sql);

$con->close();

?>