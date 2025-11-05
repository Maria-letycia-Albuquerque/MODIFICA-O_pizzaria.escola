<h1>Listar</h1>
<?php 

    include('conexao.php');

    $select = "SELECT * FROM produto";

    $result = $conn->query($select);
?>

<table class='table table-hover table-bordered '>
    <thead class='table-primary'>
        <th>Nome</th><th>Quantidade</th><th>Preço</th>
    </thead>
    <tbody>
        <?php 
            if($result->num_rows > 0){
                while($produto = $result->fetch_object()){
                    echo "<tr>
                            <td> $produto->nome </td>
                            <td> $produto->quantidade</td>
                             <td> $produto->preco</td>
                            <td class='col-2'>
                                <a class='btn btn-sm btn-warning' href='?pagina=editar&id=$produto->id_produto'>EDITAR </a>
                                <a class='btn btn-sm btn-danger' href='produto/apagar.php?id=$produto->id_produto'> EXCLUIR</a>
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