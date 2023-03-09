<!-- Usando API do Banco Central do Brasil para adquirir a contação dólar-real atualizada -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Conversor</title>
</head>
<body>
    <main>
        <header><h1>Conversor</h1></header>
        <label for="usd">Dolar (U$)</label>
        <input type="text" name="usd" id="usd" onchange="convert(this)" placeholder="U$0.00">
        <label for="brl">Real (R$)</label>
        <input type="text" name="brl" id="brl" onchange="convert(this)" placeholder="R$0.00">
    </main>
    <script>
        function convert(elem){
            let dolar = document.querySelector('#usd');
            let real = document.querySelector('#brl');

            if (elem == dolar){
                real.value = "R$" + dolar.value*5;
            }
            else if (elem == real){
                dolar.value = "U$" + real.value/5;
            }
        }
    </script>
</body>
</html>