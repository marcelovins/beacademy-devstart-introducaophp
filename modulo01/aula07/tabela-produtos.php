<?php

$produto1 = [
    'nome' => 'calça',
    'preco' => 'R$ 250,00',
    'descricao' => 'calça jeans feminina',

    ];

$produto2 = [
    'nome' => 'blusa',
    'preco' => 'R$ 50,00',
    'descricao' => 'blusa feminina básica',

    ];

$produto3 = [
    'nome' => 'vestido',
    'preco' => 'R$ 350,00',
    'descricao' => 'vestido com estampa',

    ];

$produto4 = [
    'nome' => 'conjunto infantil',
    'preco' => 'R$ 150,00',
    'descricao' => 'conjunto infantil completo',

    ];

$produto5 = [
    'nome' => 'blusa manga-longa',
    'preco' => 'R$ 50,00',
    'descricao' => 'blusa manga-longa super resistente',

    ];



$produtos = [
    $produto1,
    $produto2,
    $produto3,
    $produto4,
    $produto5

];

?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <div class=container>
    <table class="table table-hover table-striped mt-5">
        <h1 class="mt-5">Produtos</h1>
        <hr>
        <thead class="table-dark">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $cadaProduto) {
                echo '<tr>';
                echo '<td>' . $cadaProduto['nome'] . '</td>';
                echo '<td>' . $cadaProduto['preco'] . '</td>';
                echo '<td>' . $cadaProduto['descricao'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
