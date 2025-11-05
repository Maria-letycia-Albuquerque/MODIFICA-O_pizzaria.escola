<?php 

    include "conexao.php";

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $select = "SELECT * FROM produto WHERE id_produto = $id";

        $result = $conn->query($select);

        $produto = $result->fetch_object();
    }

?>
<div class="container">
    <form action="produto/atualizar.php" method="get">
        <fieldset>
            <h1>Atualizar Produto</h1>

            <!-- Campo invisível do id -->

            <input type="hidden" name="id_produto" value="<?= $produto->id_produto ?>">

            <!-- Campo de nome  -->
            <input class="form-control mb-3" type="text" required 
            placeholder="Nome do produto"  
            value="<?= $produto->nome ?>"
            name="nome" id="">

            <!-- Campo de quantidade -->
            <input class="form-control mb-3" type="number" required
            placeholder="Quantidade do produto"  
            value="<?= $produto->quantidade ?>" 
            name="quantidade" id="">

               <!-- Campo de preço  -->
               <input class="form-control mb-3" type="text" required 
            placeholder="Preço do produto"  
            value="<?= $produto->preco ?>"
            name="preco" id="">
            
            <!-- Botão de enviar os dados -->
            <input class="form-control mb-3 btn btn-primary" type="submit" 
            value="Atualizar">
        </fieldset>
    </form>
</div>