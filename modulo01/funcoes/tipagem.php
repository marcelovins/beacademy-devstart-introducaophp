<?php

declare(strict_types=1);

function somar(int $n1, int $n2) {
    return $n1 + $n2;
}

echo somar(10, 5);

echo PHP_EOL. '----------' .PHP_EOL;

echo somar(90, 5);

function ola(string $nome): string //quando não tem retorno usa-se void
{
    return "<br>olá {$nome}! Seja bem vindo!";
}

echo ola('Fernado');

// "olá {$nome}! Seja bem vindo!";