<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<link rel="stylesheet" href="../style.css">
	<title>PHP: Primeiros passos</title>
</head>
<body>
	<main>
		<header><h1>Primeiros passos</h1></header>
		<p>Para ser implementado em um documento HTML, basta implementar a <em>supertag</em> <code>&lt;?php ?&gt;</code>. Para que seja compilado pelo servidor, também é preciso que o documenta seja da extensão <em>.php</em>.</p>
		<p><em>Tags</em> HTML podem ser pré-processadas quanto utilizamos a <em>tag</em> <code>echo</code>. Vejamos a seguir:</p>
		<code class="php">
			<div>
					&lt;?php 
						echo "&lt;h3&gt;Olá, Mundo!&lt;/h3&gt;";
						echo "&lt;p&gt;Isso é PHP!&lt;/p&gt;";
					?&gt;
			</div>
		</code>
		<code class="output">
			<div><?php
					echo "<h3>Olá, Mundo!</h3>";
					echo "<p>Isso é PHP!</p>";
				?></div>
		</code>
	</main>
	<footer>
	  <a href="../ex001/index.php">Próxima página</a>
	</footer>
</body>
</html>