<form action="" method="post">
    <input name="nome" placeholder="Nome" type="text"><br>
    
    <input name="cidade" placeholder="Cidade" type="text"><br>
    
    <button type="submit">Enviar</button>
</form>
<?php
    if ($_POST) {
        echo "Oi ".$_POST['nome'];
    }
