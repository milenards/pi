<?php 
$server = "localhost";
$usuario = "root";
$password = "";
$bd = "bd_pi";


// Cria uma conexão com o banco de dados
// $conexao = mysqli_connect($server, $usuario, $password, $bd);

// Verifica se a conexão foi estabelecida com sucesso
// if (!$conexao) {
//     die("Falha na conexão: " . mysqli_connect_error());
// }
// echo "Conexão bem sucedida!";

try{
    $conexao = mysqli_connect($server, $usuario, $password, $bd);
}catch(Exception  $e){
    echo "Erro na conexão: $e";
    exit();
} 

?>