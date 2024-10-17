<?php include __DIR__ . '/../../includes/header.php' ?>
<main>
    <fieldset>
        <legend><?=(is_null($filme)) ? ("Cadastro") : ("Edição")?> de Filme</legend>

        <form method="post" action="/filme/form/create">
            <input type="hidden" name='id' value="<?=(is_null($filme)) ? ("") : ($filme->id)?>">

            <label for="">Nome:</label> <br>
            <input type="text" name="nome" value="<?=(is_null($filme)) ? ("") : ($filme->nome)?>"> <br><br>

            <label for="">Ano:</label> <br>
            <input type="number" name="ano" value="<?=(is_null($filme)) ? ("") : ($filme->ano)?>"> <br><br>

            <label for="">Duração (minutos):</label> <br>
            <input type="number" name="duracao" value="<?=(is_null($filme)) ? ("") : ($filme->duracao)?>"> <br><br>

            <label for="">Foto:</label> <br>
            <input type="text" name="foto" value="<?=(is_null($filme)) ? ("") : ($filme->foto)?>"> <br><br>

            <label for="">Sinopse:</label> <br>
            <textarea name="sinopse"><?=(is_null($filme)) ? ("") : ($filme->sinopse)?></textarea> <br><br>

            <label for="">Estilo:</label> <br>
            <select name="estilo_id">
                <?php foreach ($estilos as $estilo): ?>
                    <option value="<?=$estilo->id?>" <?=(is_null($filme) || $filme->estilo_id != $estilo->id) ? "" : "selected"?>><?=$estilo->nome?></option>
                <?php endforeach; ?>
            </select> <br><br>

            <button type="submit" name="<?=(is_null($filme)) ? ("cadastrar") : ("editar") ?>">
                <?=(is_null($filme)) ? ("Cadastrar") : ("Editar") ?>
            </button>
        </form>
    </fieldset>
</main>
<?php include __DIR__ . '/../../includes/footer.php' ?>
