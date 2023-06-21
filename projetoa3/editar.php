<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);

$result_usuario = "UPDATE login SET nome='$nome', login='$login', senha='$senha', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if (mysqli_affected_rows($conexao)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado</p>";
    header ("location: index.php?id=$id");
}
?>