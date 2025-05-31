<?php

    class Produto{
    public string $nome;
    public float $preco;

    public function exibirProduto($nome, $preco){
    $this -> nome = $nome;
    $this-> preco = $preco; 

    return "Seu cadastro possui essas informações: o livro se chama {$nome} e custa {$preco}.";



    }





    }




?>