<?php
$host = "localhost";
$db = "lista_de_produtos"; 
$user = "douglas";
$pass = "27072707"; 

$mysqli = new mysqli($host, $user, $pass, $db);

if($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados");
}

?>