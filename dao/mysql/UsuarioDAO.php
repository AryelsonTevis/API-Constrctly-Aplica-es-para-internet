<?php

namespace dao\mysql;

use dao\IUsuarioDAO;
use generic\MysqlFactory;

class UsuarioDAO extends MysqlFactory implements IUsuarioDAO
{
   public function logar($email)
   {
        $sql = "select * from usuarios where email = :email";
        $param =[":email" => $email];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    
   }
    public function listar()
    {
        $sql = "select * from usuarios";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }
    public function listarId($id)
    {
        $sql = "select * from usuarios where usuario_id=:usuario_id";
        $param = [":usuario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function inserir($nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        $sql = "insert into usuarios (nome,email,numero_telefone,CPF_CNPJ,senha,endereço_cobrança) values (:nome,:email,:telefone, :cpf,:senha,:endereco_cobranca)";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":telefone" => $telefone,
            ":cpf" => $cpf,
            ":senha" => $senha,
            ":endereco_cobranca" => $endereco
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        $sql = "UPDATE usuarios set nome = :nome, email= :email, numero_telefone = :telefone, CPF_CNPJ = :cpf, senha = :senha, endereço_cobrança = :endereco_cobranca where usuario_id = :usuario_id";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":telefone" => $telefone,
            ":cpf" => $cpf,
            ":senha" => $senha,
            ":endereco_cobranca" => $endereco,
            ":usuario_id" => $id
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function apagar($id)
    {
        $sql = "delete from task where fk_comodos in (select id_comodo from comodos where fk_casa in (select casa_id from casas where fk_proprietario in (select proprietario_id from proprietarios where fk_usuarios = :id)))";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from comodos where fk_casa in (select casa_id from casas where fk_proprietario in (select proprietario_id from proprietarios where fk_usuarios = :id))";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from casas where fk_proprietario in (select proprietario_id from proprietarios where fk_usuarios = :id)";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from proprietarios where fk_usuarios = :id";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        
        $sql = "delete from usuarios where usuarios.usuario_id = :id";
        $param = [":id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function listarPro($id)
    {
        $sql = "select p.proprietario_id, p.proprietario, p.email, p.numero_telefone, p.CPF_CNPJ, p.endereço_cobrança from usuarios as u inner join proprietarios as p on u.usuario_id =p.fk_usuarios where u.usuario_id=:usuario_id ";
        $param = [":usuario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}