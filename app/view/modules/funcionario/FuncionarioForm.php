<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionario</title>
</head>
<body>
    <fieldset>
        <legend><?=(is_null($funcionario))?("Cadastro"):("Edição")?> de Funcionário</legend>

        <form method="post" action="/funcionario/form/create">
            <input type="hidden" name='id' value=<?=(is_null($funcionario))?(""):($funcionario->id)?>>

            <label for="">Nome:</label> <br>
            <input type="text" name="nome" value=<?=(is_null($funcionario))?(""):($funcionario->nome)?>> <br><br>

            <label for="">email:</label> <br>
            <input type="email" name="email" value=<?=(is_null($funcionario))?(""):($funcionario->email)?>> <br><br>

            <label for="">senha:</label> <br>
            <input type="password" name="senha" value=<?=(is_null($funcionario))?(""):($funcionario->senha)?>> <br><br>

            <button type="submit" name=<?=(is_null($funcionario))?("cadastrar"):("editar") ?>>
                <?=(is_null($funcionario))?("Cadastar"):("Editar") ?>
            </button>

        </form>

    </fieldset>
</body>
</html>