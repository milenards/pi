<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

</head>
<body>
    
<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$observacao = $_POST['obs'];


$sql = "INSERT INTO cad_Clientes (nome, email, telefone, obs) VALUES ('$nome', '$email', '$telefone', '$observacao')";


if ($conexao->query($sql) === TRUE) {
    echo '<div class="alert alert-success" role="alert">Registro inserido com sucesso!</div>';
} else {
    echo "Erro ao inserir registro: " . $conexao->error;
}


mysqli_close($conexao);

?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    


</body>
</html>

