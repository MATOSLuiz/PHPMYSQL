<?php 

include_once("../conn.php");

$nome = "Ana";

$stmt = $con->prepare("SELECT * FROM testando WHERE nome = ? ");

$stmt->bind_param("s", $nome);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);

$con->close();

?>