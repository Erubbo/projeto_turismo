<?php
include 'conexao.php';

try{
// captura o id enviado via get e armazena em uma variavel

$id = $_GET['id'];

$sql = "DELETE from tb_viagens where id=$id";

$command = $conn->prepare ($sql);

$command-> execute();

header('location: ../adm/gerenciar_viagens.php');
}catch(PDOException $error){

    echo $error->getMessage();

}

?>