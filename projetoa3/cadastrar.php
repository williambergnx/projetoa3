<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-cadastrar.css">
</head>
<body>
<div id="corpo-form">
    <center>
        <form id= "cadastro" action="cadastro.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required><br>
            <input type="text" name="login"placeholder="login" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br><br>
            <input type="submit" id="cadastrar" value="cadastrar">
</center>
</div>
</body>
</html>