<!-- ### 12. Média de Notas Válidas

Faça um programa que calcule a 
média entre 3 notas se e somente se essas notas forem válidas. 
Uma nota é considerada válida se 
ela for maior ou igual a zero e menor ou igual a cem (0 <= nota <= 100). -->

<?php

$n1 = ($_GET['n1']);
$n2 = ($_GET['n2']);
$n3 = ($_GET['n3']);
$media = ($n1 + $n2 + $n3) / 3;

if(is_null($n1) || is_null($n2) || is_null($n3) || !is_numeric($n1) 
|| !is_numeric($n2) || !is_numeric($n3) || !($n1 >= 0 && $n1 <= 100) 
|| !($n2 >= 0 && $n2 <= 100) || !($n3 >= 0 && $n3 <= 100)){
    echo "<br>Erro! Verifique as seguintes causas: <br>1 - O valor das notas tem que ser número.
    <br>2 - Todas as notas devem ser informadas, ou seja, a URL não pode ficar vazia.
    <br>3 - As notas informadas tem que estar entre 0 e 100.";
}else{
    echo "<br>A média entre as notas informadas é de: " . (number_format($media, 2));
}