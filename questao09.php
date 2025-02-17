<!-- ### 9. IMC

Faça um programa que receba o peso e a altura de um usuário e calcule o IMC (índice de massa corpórea). O IMC é definido por `peso/(altura^2)`. Escreva no console a situação do paciente baseada na tabela abaixo:

| Cálculo IMC            | Situação                                    |
|------------------------|---------------------------------------------|
| Abaixo de 18,5         | Você está abaixo do peso ideal              |
| Entre 18,5 e 24,9      | Parabéns — você está em seu peso normal!    |
| Entre 25,0 e 29,9      | Você está acima de seu peso (sobrepeso)     |
| Entre 30,0 e 34,9      | Obesidade grau I                            |
| Entre 35,0 e 39,9      | Obesidade grau II                           |
| 40,0 e acima           | Obesidade grau III     
| -->
 <?php

$peso = ($_GET['p']);
$altura = ($_GET['a']);
$imc = $peso / (pow($altura, 2));
$imcFormatted = number_format($imc, 1);

if(is_null($peso) || is_null($altura)){
    echo "<br>Existem valores faltando na URL. ";
}else{
    echo "O IMC da pessoa com o peso de: {$peso}kg e {$altura}m de altura é: $imcFormatted";
}

if($imc < 18.5){
    echo "<br>Você está abaixo do peso ideal";
}else if($imc <= 24.9){
    echo "<br>Parabéns - você está em seu peso normal!";
}else if($imc <= 29.9){
    echo "<br>Você está acima de seu peso (sobrepeso)";
}else if($imc <= 34.9){
    echo "<br>Obesidade grau I";
}else if($imc <= 39.9){
    echo "<br>Obesidade grau II ";
}else{
    echo "<br>Obesidade grau III ";
}
