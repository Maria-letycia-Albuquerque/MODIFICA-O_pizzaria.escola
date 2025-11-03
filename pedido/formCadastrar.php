<div class="container">
    <form action="pedido/inserir.php" method="get">
        <fieldset>
            <h1>Pedido</h1>

            <legend>Sabor:</legend>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option value>
                    <input class="form-control mb-3" type="text" placeholder="Sabor?" required name="sabor" id="">
                </option>
            </select>

            <br><br>

            <legend>Quantidade:</legend>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option value>
                    <input class="form-control mb-3" type="number" placeholder="Quantidade?" required name="quantidade" id="">
                </option>
            </select>

            <br><br>

            <legend>Ponto:</legend>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option value>
                    <input class="form-control mb-3" type="text" placeholder="ponto: mal passada, ao ponto, bem passada?" required name="ponto" id="">
            </select>

            <br><br>

            <legend>Bebida:</legend>
            <select class="form-select form-select-sm" aria-label="Small select example">
                <option value>
                    <input class="form-control mb-3" type="text" placeholder="Bebida?" required name="bebida" id="">
                </option>
            </select>
        </fieldset>

        <input class="form-control mb-3 btn btn-primary" type="submit" value="Cadastrar">

    </form>