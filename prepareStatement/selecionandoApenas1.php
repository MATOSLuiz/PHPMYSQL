<?php 

include_once("../conn.php");

$id = 1;

$stmt = $con->prepare("SELECT * FROM testando WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_row();

print_r($data);

$con->close();

?>