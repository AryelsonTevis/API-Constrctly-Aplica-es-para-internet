<?php

namespace dao\mysql;

use dao\IProprietarioDAO;
use generic\MysqlFactory;

class ProprietarioDAO extends MysqlFactory implements IProprietarioDAO
{
    public function listar()
    {
        $sql = "select * from proprietarios";
        $retorno = $this->banco->executar($sql);
        return $retorno;
    }
    public function listarId($id)
    {
        $sql = "select * from proprietarios where proprietario_id=:proprietario_id ";
        $param = [":proprietario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function listarcasas($id)
    {
        $sql = "select c.bairro, c.metros, c.quantidade_comodos, c.valor_estimado from proprietarios as p inner join casas as c on p.proprietaio_id =c.fk_proprietario where p.proprietario_id=:proprietario_id ";
        $param = [":proprietario_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function inserir($nome, $id, $email, $telefone, $cpf, $endereco)
    {
        $sql = "insert into proprietarios (proprietario,fk_usuarios,email,numero_telefone,CPF_CNPJ,endereço_cobrança) values (:nome,:id,:email,:telefone, :cpf,:endereco_cobranca)";
        $param = [
            ":nome" => $nome,
            ":id" => $id,
            ":email" => $email,
            ":telefone" => $telefone,
            ":cpf" => $cpf,
            ":endereco_cobranca" => $endereco
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    
     public function apagar($id)
    {
        $sql = "delete from task where fk_comodos in (select id_comodo from comodos where fk_casa in (select casa_id from casas where fk_proprietario = :id))";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from comodos where fk_casa in (select casa_id from casas where fk_proprietario = :id)";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from casas where fk_proprietario = :id";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from proprietarios where proprietario_id = :id";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }
    public function alterar($id, $nome, $email, $telefone, $cpf, $endereco)
    {
        $sql = "UPDATE proprietarios set proprietario = :nome, email= :email, numero_telefone = :telefone, CPF_CNPJ = :cpf, endereço_cobrança = :endereco_cobranca where proprietario_id = :id";
        $param = [
            ":nome" => $nome,
            ":email" => $email,
            ":telefone" => $telefone,
            ":cpf" => $cpf,
            
            ":endereco_cobranca" => $endereco,
            ":id" => $id
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
}