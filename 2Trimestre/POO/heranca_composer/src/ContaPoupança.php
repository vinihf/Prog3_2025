<?php

class ContaPoupança extends ContaBancaria{

    public function __construct(float $saldo){
        parent::__construct($saldo);
    }

}