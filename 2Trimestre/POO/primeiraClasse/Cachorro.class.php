<?php

class Cachorro{


    public function __construct(private string $nome = "", private string $raça = ""){
    }

    public function latir():string{
        return "Au Au Au";
    }

    public function getNome():string{
        return $this->nome;
    }

    public function getRaça():string{
        return $this->raça;
    }


    public function setNome(string $nome):void{
        $this->nome = $nome;
    }

}
