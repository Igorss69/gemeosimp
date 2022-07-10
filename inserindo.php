<?php
include('inserir.php');
if(!empty($_GET['nomecliente'])){
    $nomecliente = $_GET['nomecliente'];
}
if(!empty($_GET['nometrabalho'])){
    $nometrabalho = $_GET['nometrabalho'];
}
if(!empty($_GET['prazo'])){
    $prazo = $_GET['prazo'];
}
echo $nomecliente;
echo $nometrabalho;
echo $prazo;

$insert = "INSERT into trabpend(nome_trabalhoP, nome_cliente, prazo_entrega, id, data_registro) values ('$nometrabalho', '$nomecliente', '$prazo', 'id', now())";
$insertaction = $con ->query($insert);
header('Location:inserir.php');
?>