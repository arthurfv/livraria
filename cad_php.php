<?php


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cad_style.css">
    <title>Tela de Cadastro</title>
</head>
<body>
    
<div class="form_cad">
    
    <div class="title">
     <h2>Cadastre o livro</h2>
    </div>

    <form method="POST" action="processa.php">

     <div>
         <input type="text" name="titulo" placeholder="Título">
    </div>

    <div>
         <input type="text" name="autor" placeholder="Autor">
    </div>

    <div>     
         <input type="text" name="genero" placeholder="Gênero">
    </div>

    <div> 
         <input type="text" name="editora" placeholder="Editora">
    </div>

    <div>    
        <input type="submit" name="acao" value="Cadastrar">
    </div>

    </form>
</div>

</body>
</html>