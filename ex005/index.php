<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<link rel="stylesheet" href="../style.css">
	<title>PHP: Formulários e PHP - parte 1</title>
</head>
<body>
	<main>
		<header><h1>Formulários e PHP - parte 1</h1></header>
		<p>Para o cliente, ao utilizar formulários, o JavaScript atua como agente de validação de dados, antes de enviá-los para o servidor. <strong>O servidor processa os dados enviados via PHP</strong>.</p>
        <p>Em um formulário PHP não podem faltar os atributos:</p>
        <code class="html">
            <div>
                <span class="comment">&lt;!-- method: pode ser "GET" para textos simples 
                    e "POST" quando há conteúdos sensíveis ou dados não textuais --&gt;
                
                &lt;!-- action: é o endereço destino dos dados do formulário --&gt;</span>
                
                &lt;form <span class="hl">method="GET" action="cadastro.php"</span>&gt;
                    &lt;label for="Fname"&gt;Primeiro nome:&lt;/label&gt;&lt;br&gt;
                    &lt;input type="text" id="Fname" <span class="hl">name="Fname"</span> value=""&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;label for="Lname"&gt;Último nome:&lt;/label&gt;&lt;br&gt;
                    &lt;input type="text" id="Lname" <span class="hl">name="Lname"</span> value=""&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;input type="submit" value="Enviar"&gt;
                    
                    <span class="comment">&lt;!-- name: usado no PHP para identificar o elemento,
                        assim como o id no JavaScript --&gt;</span>
                &lt;/form&gt;
            </div>
        </code>
        <code class="output">
            <div><form method="GET" action="cadastro.php">
                <label for="Fname">Primeiro nome:</label>
                <input type="text" name="Fname" value=""><br>
                <label for="Lname">Último nome:</label>
                <input type="text" name="Lname" value=""><br>
                <input type="submit" value="Enviar">
            </form>
            </div>
        </code>
	</main>
	<footer>
        <a href="../ex004/index.php">Página anterior</a> |
		<a href="../ex006/index.php">Próxima página</a>
	</footer>
</body>
</html>