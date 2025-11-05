<?php 
    include '../conexao.php';

    $id = $_GET['id'];

    $conn->query("DELETE FROM produto WHERE id_produto = $id");

    header('location:../index.php?pagina=listar')


?>