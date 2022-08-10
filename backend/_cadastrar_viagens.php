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
$desc = $_POST['desc'];

// variavel que recebe a query sql que será executada no DB

$sql = "INSERT INTO 
tb_viagens
(titulo,`local`,valor,`desc`)
values
('$titulo','$local','$valor','$desc')";

// prepara a execução da query SQL a cima
$command = $conn -> prepare($sql);
// executa o comando com a query no DB
$command -> execute();

echo "Cadastro realizado com sucesso";

$conn = null;


} catch (PDOException $error) {

    echo "não foi possível cadastrar " . $error->getMessage();


}

?>
