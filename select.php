<?php 

include_once("conn.php");

$sql = "SELECT * FROM testando";

$result = $con->query($sql);

$con->close();


//Apenas um item
$item = $result->fetch_assoc();

print_r($item);

//Varios itens
$itens = $result->fetch_all();

print_r($itens);

?>