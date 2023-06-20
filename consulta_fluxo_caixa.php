<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Consulta dos saldos</title>
</head>
<body>
    <h1>Consulta Fluxo de Caixa</h1>
    <?php
        include('Conexao.php');

        $tipo = $_POST['tipo'];

        if ($tipo == 'entrada') {
            $sql = "SELECT SUM(valor) AS valor FROM prova2 WHERE tipo = 'entrada'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            foreach($result as $key => $row){

                echo "Entradas: ".$row['valor'];}
}
        
            else if ($tipo == 'saida') {
            
            $sql = "SELECT SUM(valor) AS valor FROM prova2 WHERE tipo = 'saida'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            foreach($result as $key => $row){

                echo "Saídas: ".$row['valor'];}
}

        else if ($tipo == 'saldo') {

            $sql = "SELECT SUM(case when tipo = 'entrada' then valor else 0 end) -
            SUM(case when tipo = 'saida' then valor else 0 end) as valor
            from prova2";

            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);

            foreach($result as $key => $row){

                echo "Saldo Total: ".$row['valor'];}
}
    ?>
</body>
</html>
    