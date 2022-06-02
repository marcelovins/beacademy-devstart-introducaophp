<form action="" method="post">
    <input name="number1" placeholder="Primeiro Número" type="text"><br>
    
    <input name="number2" placeholder="Segundo Número" type="text"><br>
    
    <button name="soma" type="submit">Somar</button>
    <button name="subtracao" type="submit">Subtrair</button>
    <button name="multiplicacao" type="submit">Multiplicar</button>
    <button name="divicao" type="submit">Dividir</button>
</form>
<?php
    if ($_POST){
        if (isset($_POST['soma'])) {
            echo $_POST['number1'] + $_POST['number2'];
        }
        elseif (isset($_POST['subtracao'])) {
            echo $_POST['number1'] - $_POST['number2'];
        }
        elseif (isset($_POST['multiplicacao'])) {
            echo $_POST['number1'] * $_POST['number2'];
        }
        elseif (isset($_POST['divicao'])) {
            echo $_POST['number1'] / $_POST['number2'];
        }
    }
?>
