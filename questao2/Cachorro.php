<?php
    class Cachorro extends Animal{
        public string $fazerSom; 

        public function sobrescreve($fazerSom){
        $this -> fazerSom = $fazerSom;

        return "O cachorro Chola faz {$fazerSom}";
        }


    }





?>