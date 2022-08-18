<?php
include '../backend/conexao.php';


try {
    $sql = "SELECT * FROM tb_viagens";

    $command = $conn->prepare($sql);

    $command->execute();

    $dados = $command->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $error) {
    echo $error->getMessage();
}
?>



<!DOCTYPE html>
<html lang="pt_bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento das viagens</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="tabela">
            <h3>Gerenciar Viagens</h3>
            <hr>
            <a href="cadastrar_viagens.html">Cadastrar Viagens</a>
            <hr>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Local</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Alterar</th>
                    <th>Deletar</th>
                </tr>
                <?php

                foreach ($dados as $d) :
                ?>
                    <tr>
                        <td><?php echo $d['id'] ?></td>
                        <td><?php echo $d['titulo'] ?></td>
                        <td><?php echo $d['local'] ?></td>
                        <td>R$ <?php echo $d['valor'] ?></td>
                        <td><?php echo $d['desc'] ?></td>
                        
                        <td>
                        <a href="alterar_viagens.php?id=<?php echo $d['id']?>">Alterar</a>
                        </td>
                        <td>
                            <a href="../backend/_deletar_viagens.php?id=<?php echo $d['id'] ?>">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <?php
    $conn = null;
    ?>
</body>

</html>