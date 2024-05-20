<?php

function pegarValor($num){
    return $num = isset($_GET[$num]);
}

$num1 = pegarValor('n1');
$num2 = pegarValor('n2');
$num3 = pegarValor('n3');

if ($num1 === null || $num2 === null || $num3 === null) {
    echo "Por favor, forneça os três números como parâmetros GET na URL. Exemplo: ?num1=10&num2=20&num3=5";
    exit;
}

$soma = $num1 + $num2 + $num3;

echo "Números fornecidos na URL: $num1, $num2 e $num3";
echo "Soma dos números: $soma<br>";

if ($soma % 2 == 0) {
    echo "$soma -> PAR";
}else{
    echo "$soma -> ÍMPAR";
}