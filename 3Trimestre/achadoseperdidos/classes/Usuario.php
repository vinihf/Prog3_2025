<?php

require_once __DIR__."\..\bd\MySQL.php";

class Usuario{

    private int $idUsuario;
    
    public function __construct(private string $email,private string $senha){
    }

    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario():int{
        return $this->idUsuario;
    }

    public function setSenha(string $senha):void{
        $this->senha = $senha;
    }

    public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function getSenha():string{
        return $this->senha;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function save():bool{
        $conexao = new MySQL();
        $this->senha = password_hash($this->senha,PASSWORD_BCRYPT); 
        $sql = "INSERT INTO usuario (email,senha) VALUES ('{$this->email}','{$this->senha}')";
        return $conexao->executa($sql);
    }

    public function authenticate():bool{
        $conexao = new MySQL();
        $sql = "SELECT idUsuario,senha FROM usuario WHERE email = '{$this->email}'";
        $resultados = $conexao->consulta($sql);
        if(count($resultados)>0){
            if(password_verify($this->senha,$resultados[0]['senha'])){
                session_start();
                $_SESSION['idUsuario'] = $resultados[0]['idUsuario'];
                $_SESSION['email'] = $resultados[0]['email'];
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
