<?php

if ($_GET) {
    echo $_GET['nome'];
    echo '<br>';
    
}
var_dump($_GET);

// http://localhost:8000/aula08/get.php?nome=Marcelo&cidade=Uberlandia&rua=S%C3%A3oPaulo