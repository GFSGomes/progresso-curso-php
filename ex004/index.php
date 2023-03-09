<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<link rel="stylesheet" href="../style.css">
	<title>PHP: Manipulando Strings</title>
</head>
<body>
	<main>
		<header><h1>Manipulando Strings</h1></header>
		<p></p>
        <hr>
        <section>
			<header><h2>As aspas e suas diferenças</h2></header>
			<ul>
				<em>
				<li>single-quoted: texto cru</li>
				<li>double-quoted: processa variáveis, HTML, Unicode, etc.</li>
				<li>Heredoc</li>
				<li>Nowdoc</li>
				</em>
			</ul>
        </section>
		<hr>
		<section>
			<header><h2>Concatenação</h2></header>
			<p>Diferente da maioria das linguagens de programação, o PHP utiliza o ponto (.) para concatenar Strings.</p>
			<code class="php">
				<div>
					&lt;?php
						$curso = "curso";
						$linguagem = "PHP";

						echo $curso . $linguagem;
						//saida = cursoPHP
					?&gt;
				</div>
			</code>
			<code class="output">
				<div><?php 
					$curso = "curso";
					$linguagem = "PHP";

					echo $curso . $linguagem;
				?></div>
			</code>
			<section>
				<header><h3>Interpolando constantes e funções</h3></header>
				<p>Ao tentar usar <code>echo</code> em uma constante do tipo <em>string</em> ou função que resulte em tipo <em>string</em>, o valor da mesma não será processado:</p>
				<code class="code">
					<div>
						&lt;?php
							const PAIS = "Brasil";
							echo "Nacionalidade: PAIS";

							echo "\nEstamos no ano de date('Y').";
						?&gt;
					</div>
				</code>
				<code class="output">
					<div><?php
						const PAIS = "Brasil";
						echo "Nacionalidade: PAIS";

						echo "\nEstamos no ano de date('Y').";
					?></div>
				</code>
				<p>Para que o valor de uma constante seja processado, basta usar o operador de concatenação:</p>
				<code class="code">
					<div>
						&lt;?php
							echo "Nacionalidade: " . PAIS;

							echo "\nEstamos no ano de " . date('Y');
						?&gt;
					</div>
				</code>
				<code class="output">
					<div><?php 
						echo "Nacionalidade: " . PAIS;

						echo "\nEstamos no ano de " . date('Y');
					?></div>
				</code>
			</section>
		</section>
		<hr>
		<section>
			<header><h2><em>Heredoc</em> e <em>Nowdoc</em></h2></header>
			<p><em>Heredoc</em> quanto <em>Nowdoc</em> são formas de declaração de <em>string</em>, em especial textos multi-linha, preservando espaços. A única coisa que as difere é que ocorre pré-processamento de dados em <em>Heredoc</em>, enquanto <em>Nowdoc</em> apresenta o texto cru.</p>
			<code class="php">
				<div>
					&lt;?php
						$linguagem = 'PHP';
						$ano = date('Y');

						// Heredoc
						echo <<< FRASE
							HEREDOC:
							Sim, estou estudando $linguagem
											em pleno $ano.
						FRASE;

						// Nowdoc
						echo <<< 'FRASE'


							NOWDOC:
							Sim, estou estudando $linguagem
											em pleno $ano.
						FRASE;
					?&gt;
				</div>
			</code>
			<code class="output">
				<div><?php
					$linguagem = 'PHP';
					$ano = date('Y');

					// Heredoc
					echo <<< FRASE
						HEREDOC:
						Sim, estou estudando $linguagem
										em pleno $ano.
					FRASE;

					// Nowdoc
					echo <<< 'FRASE'


						NOWDOC:
						Sim, estou estudando $linguagem
										em pleno $ano.
					FRASE;
				?></div>
			</code>
		</section>
	</main>
	<footer>
		<a href="../ex003/index.php">Página anterior</a> |
		<a href="../ex005/index.php">Próxima página</a>
	</footer>
</body>
</html>