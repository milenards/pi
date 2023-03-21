<?php
include_once "conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$observacao = $_POST["obs"];

$sql = "INSERT INTO cadclientes (nome, email, telefone, obs) VALUES ('$nome','$email','$telefone','$observacao')";

mysqli_query($conexao, $sql);

mysqli_close($conexao);

?>
