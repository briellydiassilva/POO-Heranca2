<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao1</title>
</head>
<body>
    
    <?php
        require './Funcionario.php';
        require './Gerente.php';
        require './Programador.php';

        $exibir1 = new Funcionario();
        $exibir2 = new Gerente();
        $exibir3 = new Programador();
        echo $exibir1 -> exibirDados("Ryan",1808.90)."<br>";
        echo $exibir2 -> adiciona("comercial.")."<br>";
        echo $exibir3 -> inclui("Java.");
    ?>


</body>
</html>