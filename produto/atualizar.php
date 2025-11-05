<?php 
    include '../conexao.php';

    $id = $_GET['id_produto'];
    $nome = $_GET['nome'];
    $quantidade = $_GET['quantidade'];
    $preco = $_GET['preco'];
 
    $update = "UPDATE produto SET nome ='$nome', quantidade = '$quantidade', preco = '$preco' WHERE id_produto = $id";
    $result = $conn->query($update);

    if($result === true){
        echo "<h1>Produto atualizado com sucesso! ✅</h1>";
    }else{
        echo "<h1>Erro ao atualizar! ❌</h1>";
    }

?>

<a href="../index.php?pagina=listar">voltar</a>