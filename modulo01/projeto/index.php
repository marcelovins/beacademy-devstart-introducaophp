<?php

$url = $_SERVER['REQUEST_URI'];

include 'acoes.php';
include 'telas/head.php';
include 'telas/menu.php';

match ($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    default => erro404()
};

// if ($url === '/') {
//     home();
// }
// elseif ($url === '/login') {
//     login();
// }
// elseif ($url === '/cadastro') {
//     cadastro();
// }
// elseif ($url === '/listar') {
//     listar();
// }
// else {
//     erro404();
// }


include 'telas/footer.php';