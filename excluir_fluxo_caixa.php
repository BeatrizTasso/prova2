<?php
    include('conexao.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM prova2 where id=$id";
    $result = mysqli_query($con,$sql);
    if($result)
        echo "Dados deletados com sucesso!<br>";
    else
        echo "Erro ao deletar: ". mysqli_error($con)."!";
?>
    <br><a href="index.php">Voltar</a>