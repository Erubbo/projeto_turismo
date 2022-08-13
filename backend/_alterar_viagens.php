<?php
include 'conexao.php';


try{
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];

    $sql = "UPDATE 

    tb_viagens SET 
    
    titulo  = '$titulo',
    `local` = '$local',
    valor   = '$valor',
    `desc`  = '$desc'
     WHERE 
      id    =   $id;
      ";

      $command = $conn->prepare($sql);

      $command ->execute();


      header('Location: ../adm/alterar_viagens.php?id='.$id);



}catch(PDOException $error){
    
    echo $error->getMessage();
}




?>