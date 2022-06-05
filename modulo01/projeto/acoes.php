<?php

function login() {
    include 'telas/login.php';
}
function cadastro() {
    // var_dump($_POST);
    if ($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $arquivo = fopen('dados/contatos.csv', 'a+');
        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        fclose($arquivo);
        $mensagem = 'Pronto, cadastro realizado';
        include 'telas/mensagem.php';
        // include 'telas/cadastro.php';
    }

    include 'telas/cadastro.php';
}

function home() {
    include 'telas/home.php';
}

function listar() {
    $contatos = file('dados/contatos.csv');

    include 'telas/listar.php';
}

function erro404() {
    include 'telas/404.php';
}

function excluir() {
    // echo 'Excluindo...';
    $id = $_GET['id'];

    $contatos = file('dados/contatos.csv');

    unset($contatos[$id]);

    unlink('dados/contatos.csv');

    $arquivo = fopen('dados/contatos.csv', 'a+');

    foreach ($contatos as $cadaContato) {
        fwrite($arquivo, $cadaContato);
    }

    $mensagem = 'Pronto! Contato Excluído!';
    include 'telas/mensagem.php';

}

function editar() {
    $id = $_GET['id'];

    // echo 'editando...'.$id;
    $contatos = file('dados/contatos.csv');

    if ($_POST) {
        // echo 'funcionou...';
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        unlink('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');
        

        foreach ($contatos as $cadaContato) {
            fwrite($arquivo, $cadaContato);
        }

        fclose($arquivo);

        $mensagem = 'Pronto! Arquivo atualizado!';
        include 'telas/mensagem.php';

    };

    $dados = explode(';', $contatos[$id]);

    include 'telas/editar.php';
}


//Obs: ir testando o código aos poucos é sempre bom. usar var_dump e testes com echo, por exemplo!
