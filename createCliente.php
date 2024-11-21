<?php
include "db.php";


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST ['nome'];
    $email = $_POST['email'];
    $telefone = $_POST ['telefone'];
    $cpf = $_POST ['cpf'];


    $sql = "INSERT INTO cliente (nome, email, telefone, cpf) VALUE ('$nome', '$email', '$telefone', '$cpf')";


    if ($conn -> query($sql) === true) {
        echo "Cadastro do cliente adicionado <br>" ;
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
    <form method="POST" action="create_cliente.php">
        Nome do Cliente: <input type="text" name="nome" require>
        Email do Cliente:<input type="email" name="email" require>
        Telefone do Cliente: <input type="text" name="telefone" require>
        CPF do Cliente: <input type="text" name="cpf" require>
        <input  type="submit" value="Cadastrar">
    </form>
</body>
</html>
