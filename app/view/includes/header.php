<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="http://localhost:3000/assets/css/style.css">-->
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>Atividade de TecWeb 3 - 2º Bimestre</title>
</head>
<body>
    <header>
        <h2>TECWEB 3</h2>
        <fieldset>
            <legend>Dados do usuário</legend>
            Bem-vindo <strong><?=$_SESSION["usuario_logado"]["nome"]?></strong> | <a href="/sair">Sair</a>
        </fieldset>
        <nav>
            <a href="/">Home</a>
            <a href="/cliente">Listar Cliente</a>
            <a href="/cliente/form">Cadastrar Cliente</a>
            <a href="/estilo">Listar Estilo</a>
            <a href="/estilo/form">Cadastrar Estilo</a>
            <a href="/filme">Listar Filme</a>
            <a href="/filme/form">Cadastrar Filme</a>
            <a href="/locacao">Listar Locação</a>
            <a href="/locacao/form">Cadastrar Locação</a>
        </nav>
    </header>