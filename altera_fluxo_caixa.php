<?php
include('conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM prova2 WHERE id = $id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro de Fluxo de Caixa</h1>
    <form action="altera_fluxo_caixa_exe.php" method="post">  
          <fieldset>

        <input name="id" type="hidden" value="<?php echo $row ['id']?>">

        <div>
            <label for="data">Data: </label>
            <input type="date" name="data" id="data" required
            value="<?php echo $row ['data']?>">
        </div>
        <div>
        <label for="data">Tipo: </label>
        <input type="radio" name="tipo" id="entrada" value="ENTRADA">
            <label for="entrada">Entrada</label>
            <input type="radio" name="tipo" id="saida" value="SAIDA">
            <label for="saida">Saída</label>
        </div>
        <div>
            <label for="valor">Valor: </label>
        <input type="number" name="valor" id="valor" step=".01"
        value="<?php echo $row ['valor']?>">
        </div>
          <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Password" required
            value="<?php echo $row ['senha']?>">

        </div>
    <input type="submit" value="Salvar">
</fieldset>

    </form>
    
</body>
</html>
