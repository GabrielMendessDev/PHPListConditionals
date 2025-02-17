<?php

$x = isset($_GET['x']) ? (float) $_GET['x'] : null;
$a = isset($_GET['a']) ? (float) $_GET['a'] : null;
$b = isset($_GET['b']) ? (float) $_GET['b'] : null;
$c = isset($_GET['c']) ? (float) $_GET['c'] : null;


if (is_null($x) || is_null($a) || is_null($b) || is_null($c)) {
    echo "Existem valores faltando na URL, forneça todos os valores.";
    exit;
}

$resultado = ($a * pow($x, 2)) + ($b * $x) + $c;

echo "O resultado da função de 2° grau f($x) = {$a}x² + {$b}x + {$c} é: $resultado";

