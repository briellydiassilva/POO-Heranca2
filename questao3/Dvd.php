<?php

class Dvd extends Produto{
public float $duracao;

public function exibirDuracao($duracao){
    $this -> duracao = $duracao;

return "A duração é: {$duracao}.";


}




}


?>