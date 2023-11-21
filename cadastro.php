<?php
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cad(email,senha)
value( '$email', '$senha')";

if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}
else{
    echo "Falha ao cadastrar o usuário". mysqli_connect_error($conexao);
}

?>