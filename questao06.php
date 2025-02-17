<!-- ### 6. Empréstimo

Faça um programa que receba o salário de um trabalhador e o 
valor da prestação de um empréstimo, se a prestação for 
maior que 20% do salário imprima: “Empréstimo não concedido”
, caso contrário imprima: “Empréstimo concedido”. -->

<?php
$salario = ($_GET['s']);
$valorPrestacao = ($_GET['vp']);

if($valorPrestacao > ($salario * 0.20)){
    echo "<br> Valor do salário: $salario<br>Valor da prestação: $valorPrestacao<br>";
    echo "Empréstimo não conceder";
}else{
    echo "<br> Valor do salário: $salario<br>Valor da prestação: $valorPrestacao<br>";
    echo "Empréstimo conceder";
}