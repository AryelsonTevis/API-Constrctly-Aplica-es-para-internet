<?php

namespace service;

use dao\mysql\UsuarioDAO;
use generic\JWTAuth;
use JWTAuth as GlobalJWTAuth;
use stdClass;

class UsuarioService extends UsuarioDAO
{
    public function autenticar($usuario_id, $nome)
    {


        $jwt = new GlobalJWTAuth();
        $objeto = new stdClass();
        $objeto->id = "$usuario_id";
        $objeto->nome = "$nome";

        return $jwt->criarchave(json_encode($objeto));
    }

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