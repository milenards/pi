<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <?php
    include_once "conexao.php";

    $sql = "SELECT * FROM cad_clientes ORDER BY id DESC";

    $result = $conexao->query($sql);

    ?>


    <h3 class="text-center mt-5 mb-3">Clientes</h3>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Obrservação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['telefone']."</td>";
                    echo "<td>".$user_data['obs']."</td>";
                }
                ?>
            </tbody>
    </div>
    </table>


</body>

</html>