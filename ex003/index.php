<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<link rel="stylesheet" href="../style.css">
	<title>PHP: Tipos primitivos escalares</title>
</head>
<body>
	<main>
		<header><h1>Tipos primitivos escalares</h1></header>
		<p>Há três categorias de tipos primitivos no PHP: os escalares, os compostos e os especiais.</p>
		<hr>
		<section>
			<header><h2>Tipos primitivos escalares</h2></header>
			<p>Abrangem os tipos <code>string</code>, <code>int</code> ou <code>integer</code>, <code>float</code> ou <code>double</code> e <code>bool</code> ou <code>boolean</code>.</p>
			<code class="php">
				<div>
					&lt;?php
						$nome = "Pedro"; // String
						$idade = 26; 	 // Int
						$peso = 52.5; 	 // Float
						$casado = false; // Bool
					?&gt;
				</div>
			</code>
		</section>
		<hr>
		<section>
			<header><h2>Depuração de variáveis</h2></header>
			<p>É possível verificar um tipo de dado com a <em>tag</em> <code>var_dump()</code>:</p>
			<code class="php">
				<div>
					?php
						$oct = 010;		// 8; números iniciados com 0 são octais
						$hex = 0x1A; 	// 26; números iniciados com 0x são hexadecimais
						$bin = 0b1011; 	// 11; números iniciados com 0b são binários

						var_dump($oct);
						var_dump($hex);
						var_dump($bin);
					?&gt;
				</div>
			</code>
			<code class="output">
				<div><?php 
						$oct = 010;    // 8; números iniciados com 0 são octais
						$hex = 0x1A;   // 26; números iniciados com 0x são hexadecimais
						$bin = 0b1011; // 11; números iniciados com 0b são binários

						var_dump($oct);
						var_dump($hex);
						var_dump($bin);
					?></div>
			</code>
		</section>
		<hr>
		<section>
			<header><h2>Coerção de tipos</h2></header>
			<p>É possível tentar forçar uma variável adotar um determinado tipo através da <strong>coerção</strong>, também conhecida como <em>typecast</em>:</p>
			<code class="php">
				<div>
					&lt;?php
						$salario = "2300"; // String
						$salario = (float) $salario; // Agora $salario é do tipo float

						var_dump($salario);
					?&gt;
				</div>
			</code>
			<code class="output">
				<div><?php 
					$salario = "2300"; // String
					$salario = (float) $salario; // Agora $salario é do tipo float
				
					var_dump($salario);
				?></div>
			</code>
		</section>
	</main>
	<footer>
		<a href="../ex002/index.php">Página anterior</a> |
		<a href="../ex004/index.php">Próxima página</a>
	</footer>
</body>
</html>