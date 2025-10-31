<?php 
    //Definindo as variáveis de conexão

    $nome_servidor = "localhost";
    $nome_usuario = "root";
    $senha_usuario = "";
    $nome_bd = "sesi";
    $porta  = "3306";

    // Cirando uma conexão com o banco de dados Mysql
    $conn = new mysqli($nome_servidor, $nome_usuario,$senha_usuario, $nome_bd, $porta);

    if($conn->connect_error){
        die("Erro de conexão".$conn->connect_error);
    }

?>