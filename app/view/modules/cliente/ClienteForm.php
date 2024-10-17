<?php include __DIR__ . '/../../includes/header.php' ?>
<main>
    <fieldset>
        <legend><?=(is_null($cliente)) ? ("Cadastro") : ("Edição")?> de Cliente</legend>

        <form method="post" action="/cliente/form/create">
            <input type="hidden" name='id' value="<?=(is_null($cliente)) ? ("") : ($cliente->id)?>">

            <label for="">Nome:</label> <br>
            <input type="text" name="nome" value="<?=(is_null($cliente)) ? ("") : ($cliente->nome)?>"> <br><br>

            <label for="">Endereço:</label> <br>
            <input type="text" name="endereco" value="<?=(is_null($cliente)) ? ("") : ($cliente->endereco)?>"> <br><br>

            <label for="">Telefone:</label> <br>
            <input type="text" name="telefone" value="<?=(is_null($cliente)) ? ("") : ($cliente->telefone)?>"> <br><br>

            <button type="submit" name="<?=(is_null($cliente)) ? ("cadastrar") : ("editar") ?>">
                <?=(is_null($cliente)) ? ("Cadastrar") : ("Editar") ?>
            </button>
        </form>
    </fieldset>
</main>
<?php include __DIR__ . '/../../includes/footer.php' ?>
