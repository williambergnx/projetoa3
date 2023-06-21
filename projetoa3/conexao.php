<?php
//conexão com banco de dados
$servidor="localhost";
$username="berga3";
$senha="Admin@2023";
$dbname="projetoa3";

$conexao=mysqli_connect($servidor, $username, $senha, $dbname);
if(!$conexao){
    die("falha na conexão: ".mysqli_connect_error());
}
?>