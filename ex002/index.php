<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="../style.css">
	<title>PHP: Constantes e Variáveis</title>
</head>
<body>
	<main>
		<header><h1>Constantes e Variáveis</h1></header>
		<p>Ambas armazenam informações na memória volátil dos computadores e, no PHP, são <a href="https://pt.m.wikipedia.org/wiki/Sistema_de_tipos">tipadas dinâmicamente</a>. Vejamos a seguir.</p>
		<!-- Constantes -->
		<section>
			<header><h2>Constantes</h2></header>
			<p>Mantém o mesmo <a href="../ex003/index.php">tipo</a> e valor, do momento em que são declaradas, até o fim da execução do programa. Reatribuir um valor a uma constante resultará em erro. É convenção que os indexadores das constantes sejam escritos em caixa alta e <em>snake_case</em>, conforme exemplo:</p>
			<code class="php">
				<div>
					&lt;?php
						const <b>VALOR_DE_PI</b> = 3.14159;
					?&gt;
				</div>
			</code>
		</section>
		<hr>
		<section>
			<header><h2>Variáveis</h2></header>
			<p>Armazenam um <a href="../ex003/index.php">tipo</a> e um valor que podem ser alterados a qualquer momento. Obrigatoriamente, todo indexador de variável deve começar com um cifrão ($) e é convenção que utilize-se <code>camelCase</code> em sua nomenclatura. Vide exemplo:</p>
			<code class="php">
				<div>
						&lt;?php
							<i>//Variável do tipo String</i>
							<b>$primeiroNome</b> = "Gabriel";
						?&gt;
				</div>
			</code>
			<p>Ao receberem uma nova atribuição, variáveis adotam o tipo do dado.</p>
		</section>
	</main>
	<footer>
	  <a href="../ex001/index.php">Página anterior</a> |
	  <a href="../ex003/index.php">Próxima página</a>
	</footer>
</body>
</html>