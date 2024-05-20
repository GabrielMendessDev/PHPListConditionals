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

echo "Números fornecidos na URL: $num1, $num2 e $num3";

if ($num1 < $num2 && $num1 < $num3){
    echo "O $num1 é o menor.";
}else if($num2 < $num1 && $num2 < $num3){
    echo "O $num2 é o menor.";
}else{
    echo "O $num3 é o menor.";
}