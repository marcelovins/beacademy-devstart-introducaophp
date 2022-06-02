
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <table class="table table-hover"> 

    <?php
        
        $menu = ['Nome', 'Idade', 'Sexo'];
        $nome = ['marcelo', 'maria', 'ricardo'];
        $idade = ['23', '34', '35'];
        $sexo = ['masculino', 'feminino'];


        echo "<h2>CLIENTES</h2>";
            echo "<thead>
                <th>{$menu[0]}</th>
                <th>{$menu[1]}</th>
                <th>{$menu[2]}</th>
            </thead>";
            echo "<tr>
                <td>{$nome[0]}</td>
                <td>{$idade[0]}</td>
                <td>{$sexo[0]}</td>
            </tr>";
            echo "<tr>
                <td>{$nome[1]}</td>
                <td>{$idade[1]}</td>
                <td>{$sexo[1]}</td>
            </tr>";
            echo "<tr>
                <td>{$nome[2]}</td>
                <td>{$idade[2]}</td>
                <td>{$sexo[0]}</td>
            </tr>";


    
    ?>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>


<!-- <table border=2> 

    <?php
        
        // $menu = ['nome', 'idade', 'sexo'];
        // $nome = ['marcelo', 'maria', 'ricardo'];
        // $idade = ['23', '34', '35'];
        // $sexo = ['masculino', 'feminino'];


        // echo "<thead>Clientes</thead>";
        //     echo "<tr>
        //         <td>{$menu[0]}</td>
        //         <td>{$menu[1]}</td>
        //         <td>{$menu[2]}</td>
        //     </tr>";
        //     echo "<tr>
        //         <td>{$nome[0]}</td>
        //         <td>{$idade[0]}</td>
        //         <td>{$sexo[0]}</td>
        //     </tr>";
        //     echo "<tr>
        //         <td>{$nome[1]}</td>
        //         <td>{$idade[1]}</td>
        //         <td>{$sexo[1]}</td>
        //     </tr>";
        //     echo "<tr>
        //         <td>{$nome[2]}</td>
        //         <td>{$idade[2]}</td>
        //         <td>{$sexo[0]}</td>
        //     </tr>";


    
    ?>
</table> -->


<!-- echo "<tr>{$nome[2]}<tr>";

echo "<tr>{$nome[1]}<tr>";

echo "<tr>{$nome[0]}<tr>"; -->