<?php

try{

    // dados da conexão com o db


    define('SERVERNAME', "localhost");
    define('USERNAME', "root");
    define('PASSWORD',"");
    define('DADABASE','db_turismo');


    $conn = new PDO("mysql:host=".SERVERNAME.";dbname=".DADABASE, USERNAME, PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";


}catch(PDOException $error){

    echo "Connection failed: " . $error->getMessage();

}
