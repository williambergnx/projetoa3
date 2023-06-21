<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT); 
$result_usuario = "DELETE  FROM login WHERE id='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
if(mysqli_affected_rows($conexao)){
    $_SESSION['msg'] = "<p style='color:green;'></p>";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:danger;'></p>";
    header("location: index.php");
}
?>