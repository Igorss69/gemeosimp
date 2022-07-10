<?php
include('conexão.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="script02.css">
    <title>inserir</title>
</head>
<body>
    <form action="inserindo.php" method="GET">
        <div class="inserir">
            <h1>NOME DO CLIENTE</h1>
            <input type="text" class="nomecliente" name="nomecliente"></br>
            <h1>NOME DO TRABALHO</h1>
            <input type="text" class="nometrabalho" name="nometrabalho"></br>
            <h1>PRAZO</h1>
            <input type="text" class="prazo" name="prazo"></br>
            <input type="submit" value="enviar">
            <a href="painel.php">VOLTAR </a>
        </div>
    </form>
</body>
</html>