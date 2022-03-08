<?php 

include_once("conn.php");

$sql = "SELECT * FROM testando";

$result = $con->query($sql);

print_r($result);


//criando e deletando tabelas com msqli

$q = "DROP TABLE pessoas";

$con->query($q);

$con->close();
?>