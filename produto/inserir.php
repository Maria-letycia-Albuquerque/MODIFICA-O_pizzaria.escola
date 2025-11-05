<?php
include '../conexao.php';

$nome = $_GET['nome'];
$quantidade = $_GET['quantidade'];
$preco = $_GET['preco'];

$insert = "INSERT INTO produto VALUES('','{$nome}','{$quantidade}','{$preco}')";
$result = $conn->query($insert);

if ($result === true) {
    echo "<h1>Produto cadastrado! ✅ </h1>";
} else {
    echo "<h1>Erro! ❌</h1>";
}

?>

<a href="../index.php?pagina=listar">voltar</a>