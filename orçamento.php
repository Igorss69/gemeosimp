<?php
include ('conexão.php');
include ('verifica_login.php');

$sqlorc = "SELECT * FROM orcamentos";

$resultorc =  $con->query($sqlorc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="script.css">
</head>
<body>
<header>
        <nav>
            <img src="imagens/gemeo.png" alt="" class="imagem">
            <a href="orçamento.php" class="nav">ORÇAMENTOS</a>
            <a href="painel.php" class="nav">TRABALHOS</a>
            <a href="instaçaões.php" class="nav">INSTALAÇÕES</a>
        </nav>
        <div class="tabela">
            <div class="orcamentos">
                <?php
                while($orcamentos = mysqli_fetch_assoc($resultorc)){
                    echo "<tr>";
                    $iddados = $orcamentos['id'];
                    $nomedados = $orcamentos['nome_cliente'];
                    $nometrab = $orcamentos['nome_trabalhoC'];
                    echo $nomedados." - ";
                    echo $nometrab." ";
                    echo "</td></br>";
                }
                ?>
            </div>
        </div>
    </header>
</body>
</html>