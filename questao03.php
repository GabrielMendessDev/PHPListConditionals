<?php

function pegarValor($num){
    return $num = isset($_GET[$num]);
}

$num1 = pegarValor('n1');

if ($num1 === null) {
    echo "Por favor, forneça os três números como parâmetros GET na URL. Exemplo: ?num1=10";
    exit;
}

echo "Número fornecido na URL: $num1";

if ($num1 % 2 == 0){
    echo "O $num1 é par.";
}else{
    echo "O $num1 é ímpar.";
}