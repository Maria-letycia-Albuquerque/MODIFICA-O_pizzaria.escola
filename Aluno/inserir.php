<?php 
    include '../conexao.php';

    $nome = $_GET['nome'];
    $nota = $_GET['nota'];
    $insert = "INSERT INTO aluno VALUES('','{$nome}','{$nota}')";
    $result = $conn->query($insert);

    if($result === true){
        echo "<h1>Aluno adicionado com sucesso !</h1>";
    }else{
        echo "<h1>Erro ao adicionar !</h1>";
    }

?>

<a href="../index.php?pagina=listar">voltar</a>