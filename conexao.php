<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "livraria";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
    echo "Falha";
}

?>