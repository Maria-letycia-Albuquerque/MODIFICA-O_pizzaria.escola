<h1>Listar</h1>
<?php 

    include('conexao.php');

    $select = "SELECT * FROM aluno";

    $result = $conn->query($select);
?>

<table class='table table-hover table-bordered '>
    <thead class='table-primary'>
        <th>Nome</th><th>Nota</th><th>Ação</th>
    </thead>
    <tbody>
        <?php 
            if($result->num_rows > 0){
                while($aluno = $result->fetch_object()){
                    echo "<tr>
                            <td> $aluno->nome </td>
                            <td> $aluno->nota</td>
                            <td class='col-2'>
                                <a class='btn btn-sm btn-warning' href='?pagina=editar&id=$aluno->id'>EDITAR </a>
                                <a class='btn btn-sm btn-danger' href='aluno/apagar.php?id=$aluno->id'> EXCLUIR</a>
                            </td>
                        
                        </tr>";
                }
            }else{
                echo "
                    <tr> 
                        <td>Nenhum dado encontrado</td>
                    </tr>
                ";
            }
        ?>
        
    </tbody>
</table>