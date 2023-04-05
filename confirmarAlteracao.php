<?php
if(!empty($_GET['id'])){
    
    include_once "conexao.php";

    $id = $_GET[['id']];

    $sqlSelect = "SELECT * FROM cad_clientes WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $observacao = $user_dataT['obs'];
        }
        print_r($nome);
    }
    else
    {
        header(('Location: cadClientes.php'));
    }

}

// if ($conexao->query($sqlAltera) === TRUE) {
//     echo "Registro alterado com sucesso!";
// } else {
//     echo "Erro ao inserir registro: " . $conexao->error;
// }

// mysqli_close($conexao);
// 
?>
