<?php

$notasCursoA = [
    3.2,
    5.4,
    4.5,
    8.0
];

$notasCursoB = [
    4.2,
    4.4,
    5.5,
    10.0
];

function mediaDeNotas(array $notas) : float
{
    // $total = array_sum($notas);
    // $quantidade = count($notas);

    // $total = 0;
    // $quantidade = 0;


    // foreach ($notas as $cadaNota) {
    //     $total += $cadaNota;
    //     $quantidade++;
    // }

    // return $total / $quantidade;
    return array_sum($notas) / count($notas);
}

echo mediaDeNotas($notasCursoA).PHP_EOL;
echo mediaDeNotas($notasCursoB).PHP_EOL;

