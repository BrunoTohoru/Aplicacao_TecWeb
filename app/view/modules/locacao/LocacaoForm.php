<?php include __DIR__ . '/../../includes/header.php' ?>
<main>
    <fieldset>
        <legend><?=(is_null($locacao)) ? ("Cadastro") : ("Edição")?> de Locação</legend>

        <form method="post" action="/locacao/form/create">
            <input type="hidden" name='id' value="<?=(is_null($locacao)) ? ("") : ($locacao->id)?>">

            <label for="">Filme:</label> <br>
            <select name="filme_id">
                <?php foreach ($filmes as $filme): ?>
                    <option value="<?=$filme->id?>" <?=(is_null($locacao) || $locacao->filme_id != $filme->id) ? "" : "selected"?>><?=$filme->nome?></option>
                <?php endforeach; ?>
            </select> <br><br>

            <label for="">Cliente:</label> <br>
            <select name="cliente_id">
                <?php foreach ($clientes as $cliente): ?>
                    <option value="<?=$cliente->id?>" <?=(is_null($locacao) || $locacao->cliente_id != $cliente->id) ? "" : "selected"?>><?=$cliente->nome?></option>
                <?php endforeach; ?>
            </select> <br><br>

            <label for="">Data de Emissão:</label> <br>
            <input type="date" name="emissao" value="<?=(is_null($locacao)) ? ("") : ($locacao->emissao)?>"> <br><br>

            <label for="">Data de Devolução:</label> <br>
            <input type="date" name="devolucao" value="<?=(is_null($locacao)) ? ("") : ($locacao->devolucao)?>"> <br><br>

            <label for="">Valor:</label> <br>
            <input type="number" step="0.01" name="valor" value="<?=(is_null($locacao)) ? ("") : ($locacao->valor)?>"> <br><br>

            <button type="submit" name="<?=(is_null($locacao)) ? ("cadastrar") : ("editar") ?>">
                <?=(is_null($locacao)) ? ("Cadastrar") : ("Editar") ?>
            </button>
        </form>
    </fieldset>
</main>
<?php include __DIR__ . '/../../includes/footer.php' ?>
