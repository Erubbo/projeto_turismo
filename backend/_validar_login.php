<?php
include ('conexao.php');

try{   
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * from 
tb_login 
where email = '$email' 
AND senha= '$senha'
AND
    BINARY senha='$senha'
AND ATIVO=1"
;


$command = $conn->prepare($sql);

$command ->execute();

$dados = $command ->fetchAll(PDO::FETCH_ASSOC);

// var_dump($dados);
// VERIFICA SE EXISTEM REGISTROS DENTRO DA VARIAVEL DADOS

if($dados != null ){

    // iniciar sessao
    session_start();
// cria uma variavel de sessao e adiciona o email digitado
    $_SESSION['email'] = $email;

var_dump($_SESSION['email']);



    header('Location: ../adm/gerenciar_viagens.php');
}else{

    // header('location: ../adm/index.html');
    

}

 }catch(PDOException $error){
    echo $error->getMessage();
}




?>