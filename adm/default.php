<?php

session_start();

if(isset($_SESSION['email'])){
    header('Location: gerenciar_viagens.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>

<body>
    <div id="container">
        <div id="login">
            <h3>Login</h3>

            <form action="../backend/_validar_login.php" method="post">

                <div>
                    <label for="nome">E-mail</label>
                    <input type="email" name="usuario" id="usuario" placeholder="Digite o e-mail:" required>
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha:" required>
                </div>

        <input type="submit" id="button" value="Login">

        </form>
    </div>
    </div>
</body>

</html>