<?php

include_once("conexao.php");

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$genero = $_POST['genero'];
$editora = $_POST['editora'];

$sql = "INSERT INTO livros (titulo,autor,genero,editora) values ('$titulo','$autor','$genero','$editora')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>