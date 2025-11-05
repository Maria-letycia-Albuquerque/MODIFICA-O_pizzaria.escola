<?php

include('conexao.php');

$select = "SELECT * FROM produto";

$result = $conn->query($select);

?>


<div class="container">
    <form action="pedido/inserir.php" method="get">
        <fieldset>
            <h1>Pedido</h1>

            <legend>Sabor:</legend>
            <select class="form-select form-select-sm" aria-label="Small select example" name="sabor">
                <option value='Calabresa'>
                    Calabresa
                </option>
                <option value='Frango com Catupiry'>
                    Frango com Catupiry
                </option>
                <option value='Marguerita'>
                    Marguerita
                </option>
                <option value='Mussarela'>
                    Mussarela
                </option>
                <option value='Charque com Queijo Qualho'>
                    Charque com Queijo Qualho
                </option>
            </select>

            <br><br>

            <legend>Quantidade:</legend>
            <input class="form-control mb-3" type="number" placeholder="Quantidade?" required name="quantidade" id="">

            <br><br>

            <legend>Ponto:</legend>
            <input class="form-control mb-3" type="text" placeholder="ponto: mal passada, ao ponto, bem passada?" required name="ponto" id="">


            <br><br>

            <legend>Bebida:</legend>
            <select class="form-select form-select-sm" aria-label="Small select example" name="bebida">
                <?php
                if ($result->num_rows > 0) {
                    while ($produto = $result->fetch_object()) {
                        echo "<option> 
                                $produto->nome                  
                            </option>";
                    }
                } else {
                    echo "
                <option> 
                    Nenhum dado enconoptionado
                </option>
            ";
                }
                ?>
            </select>
        </fieldset>

        <input class="form-control mb-3 btn btn-primary" type="submit" value="Cadastrar">

    </form>