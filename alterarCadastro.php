<?php

if(!empty($_GET['id'])){

    include_once "conexao.php";

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM cad_clientes WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $observacao = $user_data['obs'];
        }
        
    }
    else
    {
        header(('Location: cadClientes.php'));
    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <h3 class="text-center mt-5 mb-3">Alterar Cadastro</h3>
    <div class="container">

        <form action="confirmarAlteracao.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" required value="<?php echo $nome ?>" >
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email"  value="<?php echo $email ?>" >
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required value=" <?php echo $telefone ?>" > 
            </div>
            <div class="form-group">
                <label for="obs">Observação:</label>
                <input type="text" class="form-control" id="obs" name="obs" value="<?php echo $observacao ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">

            <input type="submit" name="update" id="update" class="btn btn-primary" href>
            <a href="listarClientes.php" class="btn btn-primary">Voltar</a>



        </form>
    </div>

    
</body>

</html>