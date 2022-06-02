<?php

$idade = 18;

echo $idade >= 18 ? "maior de 18" : "menor de 18";

echo "<br>";

$nome = 'Marcelo';

echo isset($nome) ? $nome : 'nome não definido';

echo "<br>";

echo $nome ?? 'nome não definido';


