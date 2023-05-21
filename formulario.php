<div class="container">
    <!-- <h1 class="text-center mt-5 mb-3">Cadastro de Cliente</h1> -->

    <form action="validarConexao.php" method="POST">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome"required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="tel" class="form-control" id="telefone" name="telefone" required>
        </div>
        <div class="form-group">
            <label for="obs">Observação:</label>
            <input type="text" class="form-control" id="obs" name="obs">
        </div>
        <div class="text-center mt-5 mb-3">
        <button type="submit" class="btn btn-primary" >Cadastrar</button>
        <a href="inicio.php" class="btn btn-primary">Voltar</a>
        </div>

    </form>
    
</div>

<!-- Incluindo do Bootstrap -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>