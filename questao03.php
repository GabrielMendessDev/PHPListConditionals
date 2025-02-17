<!-- ### 3. Par ou Ímpar

Faça um programa que leia um número e mostre se ele é par ou ímpar. -->

<?php

$num1 = ($_GET['num']);

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