<?php
include ('conexao.php');

try{   
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * from 
tb_login 
where email = '$email' 
AND senha= '$senha'
AND ATIVO=1";


$command = $conn->prepare($sql);

$command ->execute();

$dados = $command ->fetchAll(PDO::FETCH_ASSOC);

// var_dump($dados);
// VERIFICA SE EXISTEM REGISTROS DENTRO DA VARIAVEL DADOS

if($dados != null ){
    header('Location: ../adm/gerenciar_viagens.php');
}else{

    // header('location: ../adm/index.html');
    

}

 }catch(PDOException $error){
    echo $error->getMessage();
}




?>