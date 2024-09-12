<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários</title>
</head>
<body>
    
    <table>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php foreach($funcionarios as $funcionario): ?>
        <tr>
            <td><?=$funcionario->nome ?></td>
            <td><?=$funcionario->email ?></td>
            <td>
                <a href="/funcionario/form?edit=<?=$funcionario->id?>">
                    <button>Editar</button>
                </a> 

                <a href="/funcionario/delete?id=<?=$funcionario->id?>">
                    <button>Excluir</button>
                </a> 
            </td>
        </tr>
        <?php endforeach ?>
        
    </table>

</body>
</html>