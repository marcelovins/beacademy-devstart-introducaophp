<?php

function login() {
    include 'telas/login.php';
}
function cadastro() {
    var_dump($_POST);
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
