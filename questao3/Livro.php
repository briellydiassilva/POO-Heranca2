<?php

    class Livro extends Produto{
    public string $nomeautor;

    public function exibirAutor($nomeautor){
        $this -> nomeautor = $nomeautor;

        return "O(A) autor(a) do livro é {$nomeautor}.";


    }

    }


?>