<?php

session_start();

$usuario = $_SESSION['email'];

if($usuario == null){

    header("Location: index.html");
    echo "Faça Login";
    exit;
}

?>