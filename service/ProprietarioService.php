<?php

namespace service;


use dao\mysql\ProprietarioDAO;

class proprietarioService extends ProprietarioDAO
{
    public function listarPropietario()
    {
        return parent::listar();
    }

    public function listarId($id)
    {
        return parent::listarId($id);
    }
    
    public function apagar($id)
    {
        return parent::apagar($id);
    }
    public function inserir($nome, $id, $email, $telefone, $cpf, $endereco)
    {
        return parent::inserir($nome, $id, $email, $telefone, $cpf, $endereco);
    }
    public function alterar($id, $nome, $email, $telefone, $cpf, $endereco)
    {
        return parent::alterar($id, $nome, $email, $telefone, $cpf, $endereco);
    }
}