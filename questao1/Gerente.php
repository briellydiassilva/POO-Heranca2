<?php

class Gerente extends Funcionario{

    public string $departamento; 
    
    public function adiciona($departamento){
        $this->departamento = $departamento;
        
        return "O gerente pertence ao departamento {$departamento}";
    }
}

?>