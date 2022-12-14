<?php
include '../backend/includes/conexao.php';

include '../backend/includes/controle_session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de viagens</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div id="container">
        <h3>Cadastro de viagens</h3>
        <hr>
        <a href="gerenciar_viagens.php">Gerenciar Viagens</a>
        <hr>

        <form action="../backend/_cadastrar_viagens.php" method="post" enctype="multipart/form-data">
            <div>
            <label for="titulo">TItulo</label>
            <input type="text" name="titulo" id="titulo">
        </div>

        <div>
            <label for="local">Local</label>
            <input type="text" name="local" id="local">
        </div>

        <div>
            <label for="valor">valor</label>
            <input type="number" name="valor" id="valor">
        </div>
        <div>
            <label for="img">Imagem</label>
            <input type="file" name="img" id="img">
        </div>

        <div>
            <label for="desc">Descrição</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" name="cadastrar" value="Cadastrar">


        </form>
    </div>
    
</body>
</html>