<?php 

include_once("../conn.php");

$id = 1;

$stmt = $con->prepare("DELETE FROM testando WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$con->close();

?>