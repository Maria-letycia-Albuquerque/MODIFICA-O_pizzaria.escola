<?php
include '../conexao.php';

$sabor = $_GET['sabor'];
$quantidade = $_GET['quantidade'];
$ponto = $_GET['ponto'];
$bebida = $_GET['bebida'];

$insert = "INSERT INTO produto VALUES('{$sabor}','{$quantidade}','{$ponto}','{$bebida}')";
$result = $conn->query($insert);

if ($result === true) {
    echo "<h1>pedido enviado! ✅ - BOM APETITE!! 🍕</h1>";
} else {
    echo "<h1>Erro! ❌</h1>";
}

?>

<a href="../index.php?pagina=listar">voltar</a>