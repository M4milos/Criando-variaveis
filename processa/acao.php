<?php

// var_dump($_POST);

while (($chave = current($_POST)) !== false) { // percorre o array $_POST e retorna a chave atual do array e o valor associado a ela
    $campo = key($_POST); //Aqui você pega o campo do array $_POST

    $valor = $_POST[key($_POST)]; //Aqui você atribui o valor do campo a variável

    $matriz[$campo] = $valor; //Aqui você atribui o valor da variável ao campo do array

    next($_POST); //Aqui você avança para o próximo campo do array
}

    foreach ($matriz as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }

?>