<select name="" id="">
    <option selected>-- selecione o ano --</option>
    <?php
        $ano = 2022;
        $mes = ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'];
        $dia = 31;

        while ($ano > 1900) {
            echo "<option>{$ano}</option>";
           $ano--;
       
        
        }
        while ($ano > 1900) {
            echo "<option>{$ano}</option>";
           $ano--;
        }
    ?>

</select>
<select name="" id="">
    <option selected>-- selecione o mês --</option>
    <?php
        
        $mes = ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'];
       

        
        for ($n = 0; $n < 12; $n++) {
            echo "<option>  $mes[$n]  </option>";
        }

    ?>

</select>
<select name="" id="">
    <option selected>-- selecione o dia --</option>
    <?php
        
        $dia = 1;

        while ($dia < 31) {
            echo "<option>{$dia}</option>";
           $dia++;
        }
    ?>

</select>