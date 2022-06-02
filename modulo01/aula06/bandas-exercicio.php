<?php

$banda = [
    ['Journey', 5],
    ['AlterBridge', 22],
    ['WhiteSnake', 2],
    ['Europe', 5],
    ['IronMaiden', 2]
];

$n = 0;
$i = 0;

echo '<table>';


foreach ($banda as $cadaBanda[$n][$i]) {

    echo "<tr>{$cadaBanda[$n][$i]}</tr>";
    $n++;
    $i++;
}



'</table>';