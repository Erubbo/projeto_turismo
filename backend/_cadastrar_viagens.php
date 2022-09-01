<?php

// include da conexão com o banco de dados
include 'includes/conexao.php';

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



$extensao = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);


if($extensao != 'jpg' && $extensao != 'jpeg' && $extensao !='png'){
    echo 'Formato de imagem inválido';
    exit;
}
// gerar um id unico
$hash = md5( uniqid($_FILES['img']['tmp_name'],true));

$nome_final = $hash.'.'.$extensao;

// onde será colocada a img
$pasta = '../img/upload/';


// função php para fazer upload

move_uploaded_file($_FILES['img']['tmp_name'],$pasta.$nome_final);



// ================

// variavel que recebe a query sql que será executada no DB

$sql = "INSERT INTO 
tb_viagens
(titulo,`local`,valor,`img`,`desc`)
values
('$titulo','$local','$valor','$nome_final','$desc')";

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