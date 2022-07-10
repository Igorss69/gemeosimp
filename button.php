<?php
if(!empty($_GET['id'])){
    include "painel.php";
     $iddados = $_GET['id'];
     echo $iddados;
     
     $idselect = "SELECT * from trabpend where id = $iddados";
     $res = $con->query($idselect);

     $idadd = "INSERT into trabconcl(nome_trabalhoC, nome_cliente, prazo_entrega, id, data_registro)
     select nome_trabalhoP, nome_cliente, prazo_entrega, id, data_registro from trabpend
     where (id = $iddados)";
     $adicionar = $con->query($idadd);

     if(isset($res)){
         $sqldelete = "DELETE from trabpend where id = $iddados";
         $resultdel = $con->query($sqldelete);
         }
     }
    header('Location: painel.php');
?>