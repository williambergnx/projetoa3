<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM login WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$user_data = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<div id="corpo-form">
    <center>
        <a href="cadastrar.php">Cadastrar</a><br>
        <a href="index.php">Voltar</a><br>
        <h1>Editar Usuário</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="editar.php">
            <input type="hidden" name="id" value=" <?php echo $user_data['id']; ?>">

            <input type="text" name="nome" placeholder="Nome" value="<?php echo
            $user_data['nome']; ?>"><br>

            <input type="text" name="login"placeholder="login" value="<?php echo
            $user_data['login']; ?>"><br>

            <input type="password" name="senha" placeholder="Senha" value="<?php echo
            $user_data['nome']; ?>"><br><br>

            <input type="submit" value="editar">
</center>
</div>
</body>
</html>