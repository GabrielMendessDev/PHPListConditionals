<!-- ### 7. Função de 1º Grau

Faça um programa que calcule e exiba o resultado de uma 
função de 1º Grau `f(x) = ax + b`. -->

<?php

$x = ($_GET['x']);
$a = ($_GET['a']);
$b = ($_GET['b']);

$resultado = $x * $a + $b;

if($x != null && $a != null && $b != null){
    echo "<br> Valores fornecidos na URL: x: $x; a: $a; b: $b<br>";
    echo "O resultado da função f($x) = $x x $a + $b é: $resultado";
}else{
    echo "Forneça todos valores na URL.";
}

