<?php
include_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$observacao = $_POST['obs'];


$sql = "INSERT INTO cad_Clientes (nome, email, telefone, obs) VALUES ('$nome', '$email', '$telefone', '$observacao')";


if ($conexao->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conexao->error;
}


mysqli_close($conexao);

?>

