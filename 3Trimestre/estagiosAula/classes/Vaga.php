<?php
require_once __DIR__."/../bd/MySQL.php";

class Vaga{

    public int $idVaga;
    public string $data;

    public function __construct(public string $descricao,public string $empresa, public int $status=1){
    }

    public function save():bool{
        $conexao = new MySQL();
        $sql = "INSERT INTO vaga (descricao,empresa, status) VALUES ('{$this->descricao}','{$this->empresa}',{$this->status})";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM vaga";
        $resultados = $conexao->consulta($sql);
        $vagas = array();
        foreach($resultados as $resultado){
            $v = new Vaga($resultado['descricao'],$resultado['empresa'],$resultado['status']);
            $v->idVaga = $resultado['idVaga'];
            $v->data = $resultado['data'];
            $vagas[] = $v;
        }
        return $vagas;
    }

    public static function mudaStatus($idVaga):bool{
        $conexao = new MySQL();
        $sql = "UPDATE vaga SET status=0 WHERE idVaga = {$idVaga}";
        $resultado = $conexao->executa($sql);
        return $resultado;
    }
}
