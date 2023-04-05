<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php

include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$observacao = $_POST['obs'];


?>

<body>
    <h3 class="text-center mt-5 mb-3">Alterar Cadastro</h3>
    <div class="container">
        <!-- <h1 class="text-center mt-5 mb-3">Cadastro de Cliente</h1> -->

        <form action="validarConexao.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="obs">Observação:</label>
                <input type="text" class="form-control" id="obs" name="obs" required>
            </div>
            <button type="submit" class="btn btn-primary">Alterar Cadastro</button>
        </form>
    </div>
</body>

</html>