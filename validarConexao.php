<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$observacao = $_POST["observacao"];


include_once "conexao.php";
$sql = "INSERT into cadClientes (nome, email, celular, obs) VALUES ('$nome', '$email', '$telefone', '$observacao')";

$dados = mysqli_query($conexao, $sql);

?>
