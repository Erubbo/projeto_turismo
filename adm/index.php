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
    <title>Tela de Login</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="login">
                <h3>Pagina de Login</h3>
                <form action="../backend/_validar_login.php" method="post">
                    <div class="center">
                        <div>
                            <label for="email" >Usuário</label>
                            <input type="email" name="email" id="email" requeride>
                        </div>
                        <div>
                            <label for="senha">Senha</label>
                            <input type="password" requeride name="senha" id="senha">
                        </div>

                        <input class="botaolog" type="submit" name="cadastrar" value="Login">
                    </div>
                </form>
            </div>
        </div>

    </main>
    <footer>
    </footer>

</body>

</html>