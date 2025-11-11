<?php

namespace service;

use dao\mysql\CasaDAO;

class casaService extends CasaDAO
{
    public function listarCasa($id)
    {
        return parent::listarcasa($id);
    }
    public function listarId($id)
    {
        return parent::listarId($id);
    }
    public function inserir($id, $bairro,  $metros, $comodos, $valor)
    {
        return parent::inserir( $id, $bairro, $metros, $comodos, $valor);
    }
    public function alterar($id, $bairro, $metros, $comodos, $valor)
    {
        return parent::alterar($id, $bairro, $metros, $comodos, $valor);
    }
    public function apagar($id) {
        return parent::apagar($id);
        
    }
}