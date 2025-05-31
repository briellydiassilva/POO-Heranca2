<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao3</title>
</head>
<body>

    <?php

    require './Produto.php';
    require './Livro.php';
    require './Dvd.php';

    $exibir1 = new Produto();
    $exibir2 = new Livro();
    $exibir3 = new Dvd(); 
    echo $exibir1 -> exibirProduto("'Eu e esse meu coração'", 41.08)."<br>";
    echo $exibir2 -> exibirAutor("C.C. Hunter")."<br>";
    echo $exibir3 -> exibirDuracao(11.54);



    ?>
    
</body>
</html>