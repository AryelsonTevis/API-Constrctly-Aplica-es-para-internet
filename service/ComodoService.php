<?php

namespace service;

use dao\mysql\ComodoDAO;

class comodoService extends ComodoDAO
{
    public function listarComodo($id)
    {
        return parent::listarcomodo($id);
    }
    public function listarId($id)
    {
        return parent::listarId($id);
    }
    public function inserir($id, $area, $comodos)
    {
        return parent::inserir( $id, $area, $comodos);
    }
    public function alterar($id, $comodo, $area,  $id_fk, $progresso)
    {
        return parent::alterar($id, $comodo, $area,  $id_fk, $progresso);
    }
    public function apagar($id)
    {
        return parent::apagar($id);
    }
    public function inserirpor($id){
        return parent::inserirpor($id);
    }
    
}