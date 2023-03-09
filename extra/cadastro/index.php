<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Cadastro</title>
</head>
<body>
    <main>
        <header><h1>Cadastro</h1></header>
        <form action="cad.php" method="POST">
            <label for="username">Nome de usuário</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" required>
            <label for="password2">Confirme sua senha</label>
            <input type="password" name="password2" id="password2" required>
            <label for="email">Endereço de e-mail</label>
            <input type="email" name="email" id="email" required>
            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>