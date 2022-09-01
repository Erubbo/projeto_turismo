<?php
include 'includes/conexao.php';

try{
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $local = $_POST['local'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
   
   $veri =$_FILES['img']['name'];

   if($veri != null){
    $img = $_FILES['img'];

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
    


    $sql = "UPDATE 

    tb_viagens SET 
    
    titulo  = '$titulo',
    `local` = '$local',
    valor   = '$valor',
    img = '$nome_final',
    `desc`  = '$desc'

     WHERE 
      id    =   $id;
      ";

   }else{

    $sql = "UPDATE 

    tb_viagens SET 
    
    titulo  = '$titulo',
    `local` = '$local',
    valor   = '$valor',
    `desc`  = '$desc'

     WHERE 
      id    =   $id;
      ";}

      $command = $conn->prepare($sql);

      $command ->execute();


      header('Location: ../adm/alterar_viagens.php?id='.$id);



}catch(PDOException $error){
    
    echo $error->getMessage();
}




?>