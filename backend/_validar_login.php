<?php
include ('conexao.php');

try{   
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * from tb_login where email = '$email' AND senha= '$senha'";

$command = $conn->prepare($sql);

$command ->execute();

$dados = $command ->fetchAll(PDO::FETCH_ASSOC);

var_dump($dados);

 }catch(PDOException $error){
    echo $error->getMessage();
}




?>