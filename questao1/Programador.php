<?php

class Programador extends Funcionario{

    public string $linguagem;

    public function inclui($linguagem){
        $this-> linguagem = $linguagem;

        return "O programador trabalha com a {$linguagem}";
    }

}

?>