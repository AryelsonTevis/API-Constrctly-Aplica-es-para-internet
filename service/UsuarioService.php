<?php

namespace service;

use dao\mysql\UsuarioDAO;

class UsuarioService extends UsuarioDAO
{
    public function listarUsuario()
    {
        return parent::listar();
    }
    public function logar($email)
    {
        return parent::logar($email);
    }
   
    public function inserir($nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        return parent::inserir($nome, $email, $telefone, $cpf, $senha, $endereco);
    }
    public function alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        return parent::alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco);
    }
    public function listarId($id)
    {
        return parent::listarId($id);
    }
    public function listarPro($id)
    {
        return parent::listarPro($id);
    }
    public function apagar($id)
    {
        return parent::apagar($id);
    }
}