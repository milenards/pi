<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$observacao = $_POST['obs'];


$sqlAltera = "UPDATE cad_Clientes SET nome = '$nome', email, telefone, obs) VALUES ('$nome', '$email', '$telefone', '$observacao')";


if ($conexao->query($sqlAltera) === TRUE) {
    echo "Registro alterado com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conexao->error;
}

mysqli_close($conexao);
?>
