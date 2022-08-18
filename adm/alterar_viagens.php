<?php
include '../backend/conexao.php';

$id = $_GET['id'];
try {
    $sql = "SELECT * from tb_viagens where id=$id";

    $command = $conn->prepare($sql);

    $command->execute();

    $dados = $command->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar VIagens</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h3>Alterar Viagem</h3>
        <hr>
        <a href="gerenciar_viagens.php">Gerenciar Viagens</a>
        <hr>        

        <form action="../backend/_alterar_viagens.php" method="post">
            <div class="grid-alterar">
                <div>
                    <label for="titulo">ID</label>
                    <input type="text" name="id" id="id" value="<?php echo $dados[0]['id'] ?>" readonly>
                </div>
                <div>
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $dados[0]['titulo'] ?>">
                </div>

                <div>
                    <label for="local">Local</label>
                    <input type="text" name="local" id="local" value="<?php echo $dados[0]['local'] ?>">
                </div>
                <div>
                    <label for="valor">Valor</label>
                    <input type="number" name="valor" id="valor" value="<?php echo $dados[0]['valor'] ?>">
                </div>
                <div>
                    <label for="img">Imagem</label>
                    <input type="file" name="img" id="img" value="" >
                </div>
                <div>
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $dados[0]['desc'] ?></textarea>

                </div>
                <input type="submit" name="alterar" id="alterar" value="Salvar">
            </div>

        </form>
    </div>
</body>

</html>