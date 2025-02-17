<!-- ### 5. Ano Bissexto

Faça um programa que determine se um determinado 
ano lido é bissexto. Sendo que um ano é bissexto 
se for divisível por 400 ou se for divisível por 
4 e não for divisível por 100. Ex: 1988, 1992, 1996. -->

<?php

$ano = ($_GET['a']);

if ($ano === null) {
    echo "Por favor, forneça o ano. Exemplo: ?a=2005";
    exit;
}

if (($ano % 400 == 0 || $ano % 4 == 0) && $ano % 100 != 0){
    echo "O ano $ano é bissexto.";
}else{
    echo "O ano $ano não é bissexto.";
}