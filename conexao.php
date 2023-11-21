<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "infor2c";

$conexao = new mysqli($host, $usuario, $senha, $banco);
if ($conexao->error) {
    die("conexao falhou". $conexao->error);
}else{
    echo"conexao bem sucedida";
}
?>