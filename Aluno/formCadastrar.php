<div class="container">
    <form action="Aluno/inserir.php" method="get">
        <fieldset>
            <h1>Cadastrar Aluno</h1>

            <!-- Campo de nome  -->
            <input class="form-control mb-3" type="text" placeholder="Nome do aluno" required name="nome" id="">

            <!-- Campo de nota -->
            <input class="form-control mb-3" type="number" placeholder="Insira a nota do aluno" required name="nota" id="">
            
            <!-- Botão de enviar os dados -->
            <input class="form-control mb-3 btn btn-primary" type="submit" value="Cadastrar">
        </fieldset>
    </form>
</div>