<?php

$arquivo = fopen('produtos.csv', 'a+');

echo 'olá marcelo';

fwrite($arquivo, 'Alessandro'.PHP_EOL);
fwrite($arquivo, 'Bruno'.PHP_EOL);
fwrite($arquivo, 'Luiza'.PHP_EOL);

fclose($arquivo);
