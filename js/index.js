i=1;
        function AdicionaInput()
        {
            var x=document.getElementById('Tabela').insertRow(0);
            var y=x.insertCell(0);
            y.innerHTML="<label>Input criado: </label><input type='text' name='A" + i + "'>";
            i++;
        }