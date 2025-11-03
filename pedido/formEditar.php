<?php 

    include "conexao.php";

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        $select = "SELECT * FROM aluno WHERE id = $id";

        $result = $conn->query($select);

        $aluno = $result->fetch_object();
    }

?>
<div class="container">
    <form action="aluno/atualizar.php" method="get">
        <fieldset>
            <h1>Atualizar Aluno</h1>

            <!-- Campo invisível do id -->

            <input type="hidden" name="id" value="<?= $aluno->id ?>">

            <!-- Campo de nome  -->
            <input class="form-control mb-3" type="text" required 
            placeholder="Nome do aluno"  
            value="<?= $aluno->nome ?>"
            name="nome" id="">

            <!-- Campo de nota -->
            <input class="form-control mb-3" type="number" required
            placeholder="Insira a nota do aluno"  
            value="<?= $aluno->nota ?>" 
            name="nota" id="">
            
            <!-- Botão de enviar os dados -->
            <input class="form-control mb-3 btn btn-primary" type="submit" 
            value="Atualizar">
        </fieldset>
    </form>
</div>