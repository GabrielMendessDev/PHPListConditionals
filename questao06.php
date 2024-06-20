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