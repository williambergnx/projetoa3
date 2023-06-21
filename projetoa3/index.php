<?php
session_start();
include_once('conexao.php');

$sql = "SELECT * FROM login ORDER BY nome DESC";

$result = $conexao-> query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-index.css">
</head>
<body>
<div id="corpo-form">
    <center>
   Olá, <?php 
   if (isset($_SESSION['nome'])==null){
?> visitante
<a href="login.php">login</a>
<?php } else { 
    echo $_SESSION['nome'];?>
    <a href="cadastrar.php">cadastrar</a><br>
    <a href="login.php">sair</a>
    <?php }?>
</center>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Login</th>
                <th scope="col">Senha</th>
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['login']."</td>";
                    echo "<td>".$user_data['senha']."</td>";
                    echo "<td> <a href='edit.php?id=".$user_data['id']."'>Editar</a><br><hr></td>";
                    echo "<td> <a href='excluir.php?id=".$user_data['id']."'>Excluir</a><br><hr></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
        </table>
</div>
</body>
</html>