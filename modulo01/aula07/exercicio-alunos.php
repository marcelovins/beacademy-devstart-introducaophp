
    <?php

    $aluno1 = [
        'nome' => 'Marcelo',
        'email' => 'marcelo@gmail.com',
        'telefone' => '34 98545850',
        'notas' => [
            5,
            1.2,
            7.5,
            9
        ]
        ];

    $aluno2 = [
        'nome' => 'Maria',
        'email' => 'maria@gmail.com',
        'telefone' => '34 99995850',
        'notas' => [
            6,
            2.2,
            8.5,
            5
        ]
        ];

    $aluno3 = [
        'nome' => 'Marcos',
        'email' => 'marcos@gmail.com',
        'telefone' => '34 88995800',
        'notas' => [
            9,
            2.7,
            5.5,
            4
        ]
        ];

    $alunos = [
        $aluno1,
        $aluno2,
        $aluno3

    ];

    ?>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <div class=container>
        <table class="table table-hover table-striped mt-5">
            <h1 class="mt-5">Alunos</h1>
            <hr>
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($alunos as $cadaAluno) {
                    echo '<tr>';
                    echo '<td>' . $cadaAluno['nome'] . '</td>';
                    echo '<td>' . $cadaAluno['email'] . '</td>';
                    echo '<td>' . $cadaAluno['telefone'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        </div>


