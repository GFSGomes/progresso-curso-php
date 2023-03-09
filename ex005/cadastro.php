<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Resultado do Cadastro - parte 2</title>
</head>
<body>
    <header><h1>Resultado do Cadastro - parte 2</h1></header>
    <p>Utilizando-se das variáveis globais <code>$_GET</code>, <code>$_POST</code> ou <code>$_REQUEST</code> é possível recuperar os dados enviados pelo PHP. Ambas funcionam como um <em>array</em> onde cada elemento do formulário repassa seu próprio <code>name</code>.</p>
    <code class="php">
        <div>
                &lt;?php
                    $primeiro = $_GET["Fname"]; <span class="comment">// Primeiro nome</span>
                    $ultimo = $_GET["Lname"];   <span class="comment">// Ultimo nome</span>
                    
                    echo "Nome completo: $primeiro $ultimo";
                    echo "&lt;p&gt;&lt;a href='javascript:history.go(-1)'&gt;Voltar&lt;/a>&lt;/p&gt;";
                ?&gt;
        </div>
    </code>
    <code class="output">
            <div><?php 
                $primeiro = $_GET["Fname"] ?? "Senhor(a)";
                $ultimo = $_GET["Lname"] ?? "";
                $completo = $primeiro . " " . $ultimo;
                echo "Nome completo: <strong class='hl'>$primeiro $ultimo</strong>";
                echo "<p><a href='javascript:history.go(-1)'>Voltar</a></p>";
                ?></div>
    </code>
</body>
</html>