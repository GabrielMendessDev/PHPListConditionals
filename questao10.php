<!-- ### 10. Divisível por 2 e 5

Faça um programa que leia um número,
 calcule e exiba se ele é divisível por 2 e 5. -->

 <?php

 $num = ($_GET['n']);


if(is_null($num)){
    echo "<br>Informe o valor do número na URL.";
    exit;
}else if(is_numeric($num)){
    if($num % 2 == 0 && $num % 5 == 0){
        echo "<br>O número $num é divisível por 2 e 5.";
        echo "<br>$num ÷ 2 = " . $num / 2;
        echo "<br>$num ÷ 5 = " . $num / 5;
    }else{
        echo "<br>O número $num não é divisível por 2 e 5.";
    }
}else{
    echo "<br>Erro! O valor informado na URL não é um número.";
}