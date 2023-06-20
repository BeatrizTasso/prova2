<?php

include("conexao.php");

$data = $_POST['data'];
$tipo = $_POST['tipo'];
$valor = $_POST['valor'];
$historico = $_POST['historico'];
$cheque = $_POST['cheque'];

echo "$data <br>";
echo "$tipo <br>";
echo "$valor <br>";
echo "$historico <br>";
echo "$cheque <br>";

$sql = "INSERT INTO prova2 (data, tipo,  valor, historico, cheque)";
$sql .= " VALUES ('".$data."', '".$tipo."', '".$valor."', '".$historico."', '".$cheque."')";
echo "$sql <br>";

$result = mysqli_query($con, $sql);

if($result){
    echo "<br>Cadastro feito com sucesso!<br>";
}else{
    echo "Erro ao cadastrar!<br>";
}
?>