<?php 

    include "conexao.php";

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $select = "SELECT * FROM pedido WHERE id_pedido = $id_pedido";

        $result = $conn->query($select);

        $pedido = $result->fetch_object();
    }

?>
<div class="container">
    <form action="pedido/atualizar.php" method="get">
        <fieldset>
            <h1>Atualizar pedido</h1>

            <!-- Campo invisível do id -->

            <input type="hidden" name="id_pedido" value="<?= $pedido->id_pedido ?>">

            <!-- Campo de nome  -->
            <input class="form-control mb-3" type="text" required 
            placeholder="Sabor do pedido"  
            value="<?= $pedido->sabor ?>"
            name="sabor" id="">

            <!-- Campo de nota -->
            <input class="form-control mb-3" type="number" required
            placeholder="Quantidade do pedido"  
            value="<?= $pedido->quantidade ?>" 
            name="quantidade" id="">

              <!-- Campo de nome  -->
              <input class="form-control mb-3" type="text" required 
            placeholder="Ponto do pedido"  
            value="<?= $pedido->ponto ?>"
            name="ponto" id="">

              <!-- Campo de nome  -->
              <input class="form-control mb-3" type="text" required 
            placeholder="Bebida do pedido"  
            value="<?= $pedido->bebida ?>"
            name="bebida" id="">
            
            <!-- Botão de enviar os dados -->
            <input class="form-control mb-3 btn btn-primary" type="submit" 
            value="Atualizar">
        </fieldset>
    </form>
</div>