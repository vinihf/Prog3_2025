<?php
require_once __DIR__."/../bd/MySQL.php";

class Item{

    public int $idItem;
    public string $data;
    
    public function __construct(public string $descricao,public string $local, public int $status = 1){
    }

    public function save():bool{
        $conexao = new MySQL();
        $sql = "INSERT INTO item (descricao,local,status) VALUES ('{$this->descricao}','{$this->local}', {$this->status})";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM item";
        $resultados = $conexao->consulta($sql);
        $itens = array();
        foreach($resultados as $resultado){
            $i = new Item($resultado['descricao'],$resultado['local'],$resultado['status']);
            $i->idItem = $resultado['idItem'];
            $i->data = $resultado['data'];
            $itens[] = $i;
        }
        return $itens;
    }

    public static function mudaStatus($idItem):bool{
        $conexao = new MySQL();
        $sql = "UPDATE item SET status = 0 WHERE idItem = {$idItem}";
        return $conexao->executa($sql);
    }

}
