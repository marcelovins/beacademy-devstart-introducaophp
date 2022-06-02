<?php

// Estrutura de decisão mais simples

$idade = 27;

if ($idade > 18 and $idade < 26) {
    echo 'maior de idade';
}
elseif ($idade < 18) {
    echo 'menor de idade';
}
elseif ($idade > 26 and $idade < 30) {
    echo 'você está apto!';
}
 