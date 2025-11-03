<?php 
    include '../conexao.php';

    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $nota = $_GET['nota'];
    $update = "UPDATE aluno SET nome ='$nome', nota = $nota WHERE id = $id";
    $result = $conn->query($update);

    if($result === true){
        echo "<h1>Aluno atualizado com sucesso !</h1>";
    }else{
        echo "<h1>Erro ao atualizar !</h1>";
    }

?>

<a href="../index.php?pagina=listar">voltar</a>