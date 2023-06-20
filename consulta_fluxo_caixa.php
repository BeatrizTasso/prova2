<?php

include("conexao.php");

$tipo = $_POST['tipo'];
$valor = $_POST['valor'];


echo "$tipo <br>";
echo "$valor <br>";

if($tipo == 'entrada'){
    $sql="select sum(valor) valor from prova2 where tipo = 'entrada'";}
else if($tipo == 'saida'){
    $sql="select sum(valor) valor from prova2 wherw tipo = 'saida'";}
else if($tipo == 'total'){
    $sql= "select sum(case when tipo = 'entrada' then valor else 0 end) - 
    sum (case when tipo = 'saida' then valor alse 0 end) as valor from prova2";
}


?>
    <br><a href="index.php">Voltar</a>