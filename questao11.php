<!-- ### 11. Categoria do Nadador

Elabore um programa em que dada a idade de um nadador 
classifique-o em uma das seguintes categorias:

- Infantil A = 5 - 7 anos
- Infantil B = 8 - 10 anos
- Juvenil A = 11-13 anos
- Juvenil B = 14-17 anos
- Adulto = maiores de 18 anos

OBS: A idade fornecida pelo usuário 
deve estar entre 0 e 120 anos. 
Caso contrário, o programa deve emitir uma mensagem de erro. -->

<?php

$idade = ($_GET['i']);

if(is_numeric($idade) && !is_null($idade) && ($idade >= 0 && $idade <= 120)){
    if($idade >= 5 && $idade <= 7){
        echo "<br>Infantil A";
    }else if($idade >= 8 && $idade <= 10){
        echo "<br>Infantil B";
    }else if($idade >= 11 && $idade <= 13){
        echo "<br>Juvenil A";
    }else if($idade >= 14 && $idade <= 17){
        echo "<br>Juvenil B";
    }else if($idade >= 18){
        echo "<br>Adulto";
    }else{
        echo "<br>Idade insuficiente para classificação.";
    }
}else{
    echo "<br>Erro! Verifique as seguintes causas: <br>1 - O valor tem que ser um número.
    <br>2 - A URL não pode ficar vazia.
    <br>3 - A idade informada tem que estar entre 0 e 120 anos.";
}