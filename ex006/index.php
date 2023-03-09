<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  	<link rel="stylesheet" href="../style.css">
	<title>PHP: Operadores aritméticos</title>
</head>
<body>
	<main>
		<header><h1>Operadores aritméticos</h1></header>
		<p>São os operadores aritméticos do PHP:</p>
        <ul style="font-family: monospace;">
            <li>+ adição</li>
            <li>- subtração</li>
            <li>* multiplicação</li>
            <li>/ divisão</li>
            <li>% módulo</li>
            <li>** exponenciação</li>
        </ul>
	</main>
    <div class="quiz">
        <div>
            <h2>Operando <em>strings</em> em PHP</h2>
            <p>Em um script PHP, a expressão <strong>"2" + "2"</strong> resultará em:</p>
            <form action="#">
                <input type="radio" name="opt" id="opt0"><label for="opt0"> "22"</label><br>
                <input type="radio" name="opt" id="opt1"><label for="opt1"> "4"</label><br>
                <input type="radio" name="opt" id="opt2"><label for="opt2"> 4</label><br>
                <input type="radio" name="opt" id="opt3"><label for="opt3"> Erro</label>
                <p><button onclick="result()">Responder</button></p>
            </form>
            <script>
                function result(){
                    let Options = document.querySelectorAll("input");
                    for (let i = 0; i < Options.length; i++){
                        if (Options[i].checked == true){
                            Options[i].id == "opt2" ? alert("CERTA RESPOSTA!") : alert("Reposta incorreta! Tente novamente.");
                            for (let j = 0; j < Options.length; j++){
                                Options[j].checked = false;
                            }
                        }
                    }
                }
            </script>
        </div>
    </div>
	<footer>
	  <a href="../ex005/index.php">Página anterior</a> |
	  <a href="../ex007/index.php">Próxima página</a>
	</footer>
</body>
</html>