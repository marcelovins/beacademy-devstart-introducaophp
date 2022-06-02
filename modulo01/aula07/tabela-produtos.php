<?php


$produto1 = [
    'nome' => 'calça',
    'quantidade' => '1',
    'preco' => 'R$ 250,00',
    'descricao' => 'calça jeans feminina',
    'imagem' => '<img src="img/calcajeans.jpg"  width = "70" alt="">'

    ];

$produto2 = [
    'nome' => 'blusa',
    'quantidade' => '1',
    'preco' => 'R$ 50,00',
    'descricao' => 'blusa feminina básica',
    'imagem' => '<img src="img/blusabasica.jpg"  width = "70" alt="">'

    ];

$produto3 = [
    'nome' => 'vestido',
    'quantidade' => '5',
    'preco' => 'R$ 350,00',
    'descricao' => 'vestido listrado',
    'imagem' => '<img src="img/vestido.jpg"  width = "70" alt="">'

    ];

$produto4 = [
    'nome' => 'conjunto infantil',
    'quantidade' => '2',
    'preco' => 'R$ 150,00',
    'descricao' => 'conjunto infantil completo',
    'imagem' => '<img src="img/conjuntoinfantil.jpg"  width = "70" alt="">'

    ];

$produto5 = [
    'nome' => 'blusa algodão',
    'quantidade' => '1',
    'preco' => 'R$ 50,00',
    'descricao' => 'blusa confortável 100% algodão',
    'imagem' => '<img src="img/blusafeminina.jpg"  width = "70" alt="">'

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
        <h1 class="mt-5">Seu Carrinho</h1>
        <hr>
        <thead class="table-dark">
            <tr>
                <th>Produto</th>
                <th>Qtd</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $cadaProduto) {
                echo '<tr>';
                echo '<td>' . $cadaProduto['nome'] . '</td>';
                echo '<td>' . $cadaProduto['quantidade'] . '</td>';
                echo '<td>' . $cadaProduto['preco'] . '</td>';
                echo '<td>' . $cadaProduto['descricao'] . '</td>';
                echo '<td>' . $cadaProduto['imagem'] . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
