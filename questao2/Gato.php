<?php

    class Gato extends Animal{
    public string $fazerSom;
        
    public function sobrescreve($fazerSom){
    $this -> fazerSom = $fazerSom;

    return "O gato Xani faz {$fazerSom}";
    }






    }


?>