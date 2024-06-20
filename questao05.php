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