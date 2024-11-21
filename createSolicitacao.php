<?php
include "db.php";


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $descricao = $_POST ['descricao'];
    $data_abertura = $_POST ['data_abertura'];
    $urgencia = $_POST['urgencia'];
    $status = $_POST ['status'];


    $sql = "INSERT INTO chamado (descricao, data_abertura, urgencia, status) VALUE ('$descricao', '$data_abertura', '$criticurgenciaidade', '$status')";


    if ($conn -> query($sql) === true) {
        echo "Cadastro de solicitação adicionado <br>" ;
    } else{
        echo "Erro $sql <br>". $conn -> error;
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="create_chamados.php">
        Descrição do Chamado: <input type="text" name="descricao" required>
        Urgência: <input type="text" name="urgencia" required>
        Status: <input type="text" name="status" required>
        Data de Abertura: <input type="date" name="data_abertura" required>
        <input  type="submit" value="Cadastrar">
    </form>
    <a href="vizualizar_chamado.php">Vizualizar solicitações</a>
    <a href="gerenciar_chamado.ph">Atualizar solicitações</a>
</body>
</html>

