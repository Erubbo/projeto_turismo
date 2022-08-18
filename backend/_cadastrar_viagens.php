<?php

// include da conexão com o banco de dados
include 'conexao.php';

try {
    // // exiber variaveis globais via post
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

// variaveis que recebem os dados enviados via POST

$titulo = $_POST['titulo'];
$local = $_POST['local'];
$valor = $_POST['valor'];
$img = $_FILES['img'];
$desc = $_POST['desc'];

// ===========================
// upload da imagem

// onde será colocada a img
$pasta = '../img/upload/';


$nome_img = 'img.jpg';
// função php para fazer upload
move_uploaded_file($_FILES['img']['tmp_name'],$pasta.$nome_img);

// ================

// variavel que recebe a query sql que será executada no DB

$sql = "INSERT INTO 
tb_viagens
(titulo,`local`,valor,`img`,`desc`)
values
('$titulo','$local','$valor','$img','$desc')";

// prepara a execução da query SQL a cima
$command = $conn -> prepare($sql);
// executa o comando com a query no DB
$command -> execute();

// echo "Cadastro realizado com sucesso";
header('Location: ../adm/cadastrar_viagens.html');

$conn = null;


} catch (PDOException $error) {

    echo "não foi possível cadastrar " . $error->getMessage();


}



?>