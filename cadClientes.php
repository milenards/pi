
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<?php include_once "conexao.php"; 
?>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-3">Cadastro de Cliente</h1>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="celular">Telefone:</label>
                <input type="tel" class="form-control" id="celular" name="celular" required>
            </div>
            <div class="form-group">
                <label for="obs">Observação:</label>
                <input type="text" class="form-control" id="obs" name="obs" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <!-- Incluindo do Bootstrap -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
