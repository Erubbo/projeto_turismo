<?php

session_start();

$usuario = $_SESSION['email'];

if($usuario == null){

    header("Location: ../adm/index.php");
    echo "Faça Login";
    exit;
}

?>