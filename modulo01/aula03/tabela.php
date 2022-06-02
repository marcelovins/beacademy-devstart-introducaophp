<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

<?php


$banda = [
    ['Journey', 5],
    ['AlterBridge', 6],
    ['WhiteSnake', 2],
    ['Europe', 2],
    ['IronMaiden', 6]
];

$i = 0;
$j = 0;

echo '<table class="table table-hover table-dark">';

echo "<thead>

        <th>BANDA</th>
        <th>                       QTD MÚSICAS</th>
        
        
        </thead>";
foreach ($banda as $cadaBanda) {

    echo "<tr>
    <td>{$cadaBanda[0]}<td>
    <td>{$cadaBanda[1]}<td>
    
    </tr>";
}



'</table>';