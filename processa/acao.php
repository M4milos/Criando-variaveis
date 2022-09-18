<?php

// var_dump($_POST);

while (($chave = current($_POST)) !== false) { // percorre o array $_POST e retorna a chave atual do array e o valor associado a ela
    $campo = key($_POST); //Aqui você pega o campo do array $_POST
    
    // var_dump($var); // aqui você pode ver o nome do campo

    echo "Campo: ". $campo ."| "; //Aqui você imprime o campo

    $variavel = "$".$campo; //Aqui você cria a variável com o valor da variavel

    //var_dump($var); //Aqui você pode ver o nome da variável

    echo "Variavel: ". $variavel ."| "; //Aqui você imprime o nome da variável

    $valor = $_POST[key($_POST)]; //Aqui você atribui o valor do campo a variável

    //var_dump($var); //Aqui você pode ver o valor da variável

    echo "Valor: ". $valor ."<br> <br>"; //Aqui você imprime o valor da variável

    next($_POST); //Aqui você avança para o próximo campo do array
}

?>