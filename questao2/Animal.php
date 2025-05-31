<?php

    class Animal{
        public string $nome; 

        public function exibirDados($nome){
        $this -> nome = $nome; 

        return "O animal recebe o {$nome}:"; 

        }
        


    }



?>