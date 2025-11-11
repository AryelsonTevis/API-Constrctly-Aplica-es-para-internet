<?php

namespace dao\mysql;

use dao\IComodoDAO;
use generic\MysqlFactory;

class ComodoDAO extends MysqlFactory implements IComodoDAO
{

public function listarcomodo($id){
        $sql = "select id_comodo, fk_casa, comodo, area,progresso from comodos as c left join task as t on c.id_comodo = t.fk_comodos where fk_casa = :id";
        $param=["id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }
    public function inserirpor( $id)
    {
        $sql = "insert into task (fk_comodos,progresso) values (:id,'0%')";
        $param = [
            ":id" => $id,            
            
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function inserir( $id, $area, $comodos)
    {
        $sql = "insert into comodos (fk_casa,comodo,area) values (:id,:comodo,:area)";
        $param = [
            ":id" => $id,            
            ":comodo" => $comodos,
            ":area" => $area
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
        
    }
    public function listarId($id)
    {
        $sql = "select id_comodo, fk_casa, comodo, area,progresso from comodos as c left join task as t on c.id_comodo = t.fk_comodos where id_comodo=:comodo_id ";
        $param = [":comodo_id" => $id];
        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function alterar($id, $area, $comodo, $id_fk, $progresso)
    {
        $sql = "UPDATE comodos as c left join task as t on c.id_comodo = t.fk_comodos set c.comodo = :comodo, c.area= :area, c.fk_casa = :fk, t.progresso = :progresso where c.id_comodo = :id";
        $param = [
            ":comodo" => $comodo,
            ":area" => $area,
            ":fk" => $id_fk,
            ":progresso" => $progresso,
            
            ":id" => $id
        ];

        $retorno = $this->banco->executar($sql, $param);
        return $retorno;
    }
    public function apagar($id){
        $sql = "delete from task where fk_comodos = :id";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        $sql = "delete from comodos where id_comodo = :id";
        $param=[":id"=>$id];
        $retorno = $this->banco->executar($sql,$param);
        return $retorno;
    }
    
}