<?php

$url = $_SERVER['REQUEST_URI'];

if ($url === '/aula08') {
    echo '<h1>Página Inicial</h1>';
}
elseif ($url === '/aula08/login') {
    echo "<h1>Página de Login</h1>";
}
elseif ($url === '/aula08/cadastro') {
    echo "<h1>Página de Cadastro</h1>";
}
else {
    echo '<h1>Página não encontrada</h1>';
}
