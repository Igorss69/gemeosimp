<?php
include('conexão.php');
include('verifica_login.php');

$sql = "SELECT * FROM trabconcl";
$sql1 = "SELECT * FROM trabpend";

$result = $con->query($sql);
$result1 = $con->query($sql1);
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
            <a href="painel.php" class="nav">TRABALHOS</a>
            <a href="orçamento.php" class="nav">ORÇAMENTOS</a>
            <a href="instaçaões.php" class="nav">INSTALAÇÕES</a>
        </nav>
    </header>
    <div class="tabela">
        <div class="pende" name="divpend">
            <h1>Pendentes<a href="inserir.php" class="inserir">ADICIONAR</a></h1>
            </br>
               <?php
               while($dados = mysqli_fetch_assoc($result1)){
                   echo "<tr>";
                   $iddados = $dados['id'];
                   $nomedados = $dados['nome_cliente'];
                   $nometrab = $dados['nome_trabalhoP'];
                   $prazo = $dados['prazo_entrega'];


                   echo "<tr>".$nomedados."</tr>" ." - ";
                   echo "<tr>".$nometrab."</tr>" ." - ";
                   echo "<tr>".$prazo."</tr>" ." - ";

                   echo "</tr>
                   

                    <a href='button.php?id=$iddados'>concluido</a></br>";
               }
            ?>
        </div>
        <div class="conclu">
        <h1>Concluidos</h1>
        </br>
            <?php
           while($dados = mysqli_fetch_assoc($result)){
               echo "<tr>";
               $iddados = $dados['id'];
               $nomedados = $dados['nome_cliente'];
               $nometrab = $dados['nome_trabalhoC'];
               $prazo = $dados['prazo_entrega'];
 
               echo "<tr>".$nomedados."</tr>" ." -- ";
                echo "<tr>".$nometrab."</tr>" ." -- ";
                echo "<tr>".$prazo."</tr>" ." ";

                echo "</tr></br>";
           }
           ?>
        </div>
    </div>
    <h2 class="sair"><a href="logout.php">Sair</a></h2>
</body>
</html>