<?php
include 'backend/includes/conexao.php';


try{

    $sql = "SELECT * FROM tb_viagens";

   $command = $conn -> prepare($sql);

    $command->execute();
// listar as informações no site
    $dados = $command->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // var_dump($dados);
    // echo"</pre>";

}catch(PDOException $error){

    echo $error->getMessage();
};

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de viagens</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h3>Listar Viagens</h3>
        <div class="grid-viagens">
            <?php
            foreach($dados as $d):
            ?>
            <figure class="figure-viagens">
                <img class="img-viagens" src="img/upload/<?php echo $d['img']?>" alt="Imagem da viagem">
                <figcaption class="figc-viagens">
                    <h4><?php echo $d['titulo'] ?></h4>
                    <h5><?php echo $d['local'] ?></h5>
                    <h5>R$<?php echo $d['valor'] ?></h5>
                    <small><?php echo $d['desc'] ?></small>
                    <button class="btn-comprar">Comprar</button>
                </figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
    
</body>
</html>