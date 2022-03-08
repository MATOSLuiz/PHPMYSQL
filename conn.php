<?php 

$host = "localhost";
$user = "root";
$password = "$$$2311@03";
$db = "teste";

$con = new mysqli($host, $user, $password, $db);

if ($con->connect_errno) {
 
    echo "Erro: " . $con->connect_error;
    exit();
    
}

?>