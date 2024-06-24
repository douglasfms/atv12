<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "banco_douglas";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if($conn->connect_error){
        die("Erro conexão");
    }
?>