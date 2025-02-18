<!-- ### 13. Verificação de Valores Inteiros e Positivos

Faça um programa que leia 3 valores e verifique 
se todos são inteiros e positivos, 
em seguida exiba quais deles 
são inteiros ou não e positivos ou negativos. -->

<?php

$n1 = ($_GET['n1']);
$n2 = ($_GET['n2']); 
$n3 = ($_GET['n3']);

if (is_null($n1) || is_null($n2) || is_null($n3)) {
    echo "Existem valores faltando na URL, forneça todos os valores.";
    exit;
}

function isInteger($number){
    return ($number == intval($number));
}

//N1

if($n1 >= 0){
    echo "<br>Número $n1: Positivo";
}else{
    echo "<br>Número $n1: Negativo";
}

if(isInteger($n1)){
    echo "<br>Número $n1: Inteiro";
}else{
    echo "<br>Número $n1: Não inteiro";
}

//N2 

if($n2 >= 0){
    echo "<br>Número $n2: Positivo";
}else{
    echo "<br>Número $n2: Negativo";
}

if(isInteger($n2)){
    echo "<br>Número $n2: Inteiro";
}else{
    echo "<br>Número $n2: Não inteiro";
}

//N3

if($n3 >= 0){
    echo "<br>Número $n3: Positivo";
}else{
    echo "<br>Número $n3: Negativo";
}

if(isInteger($n3)){
    echo "<br>Número $n3: Inteiro";
}else{
    echo "<br>Número $n3: Não inteiro";
}