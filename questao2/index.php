<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao2</title>
</head>
<body>
    
    <?php

        require './Animal.php';
        require './Cachorro.php';
        require './Gato.php';


        $exibir1 = new Animal(); 
        $exibir2 = new Cachorro(); 
        $exibir3 = new Gato();
        echo $exibir1 -> exibirDados("Som genérico")."<br>";
        echo $exibir2 -> sobrescreve("Au Au!")."<br>";
        echo $exibir3 -> sobrescreve("Miau Miau!");

    ?>


</body>
</html>