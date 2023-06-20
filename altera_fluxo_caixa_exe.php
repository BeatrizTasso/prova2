<?php

    include('conexao.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h2>Alteração de dados</h2>";

    $sql = "UPDATE prova2 SET 
        data = '$data', 
        tipo = '$tipo',
        valor = '$valor', 
        historico = '$historico',
        cheque = '$cheque'
        WHERE id = $id";

    echo $sql. "<br><br>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Dados alterados com sucesso! <br>";

    else 
        echo "Erro ao alterar dados: ".mysqli_error($con)."!";

?>
<br>
<a href="index.php">Voltar</a>