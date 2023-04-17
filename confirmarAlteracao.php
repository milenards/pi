<?php

include_once "conexao.php";
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $observacao = $_POST['obs'];


    $sqlUpdate = "UPDATE cad_clientes SET nome='$nome', email='$email', telefone='$telefone', obs='$observacao' WHERE id ='$id'";

    $result = $conexao->query($sqlUpdate);
}

header('location: cadClientes.php');

?>