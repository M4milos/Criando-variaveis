<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script type="text/javascript">
        i=1;
        function AdicionaInput()
        {
            var x=document.getElementById('Tabela').insertRow(0);
            var y=x.insertCell(0);
            y.innerHTML="<input type='text' name='A" + i + "'>";
            i++;
        }
    </script>
</head>
<body>
    
<form action="processa/acao.php" method="post">
        <input type="button" onclick="AdicionaInput()" value="Adcionar Input"><br>
        <input type="submit" value="Enviar"/>
    <table id="Tabela" border="0">
    </table>
</form>
</body>
</html>