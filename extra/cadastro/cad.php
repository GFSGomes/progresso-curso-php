<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <header><h1>Cadastro concluído</h1></header>
        <?php
            echo "<p>Bem-vindo à nossa comunidade, <strong>" . $_POST["username"] . "</strong></p>.";
            echo "<p>Senha: <strong>" . $_POST["password"] . "</strong></p>.";
            echo "<p>Email: <strong>" . $_POST["email"] . "</strong></p>.";
        ?>
    </main>
</body>
</html>