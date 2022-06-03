<form action="" method="post">

    <input type="text" name="nome" placeholder="digite aqui" id="">

    <button type="submit">Enviar</button>


</form>




<?php

if ($_POST) {
    echo $_POST['nome'];
    echo '<br>';
    
}
