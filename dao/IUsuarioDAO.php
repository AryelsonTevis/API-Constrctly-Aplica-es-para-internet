<?php

namespace dao;

interface IUsuarioDAO
{
    public function listar();
    
    public function logar($email);
    public function inserir($nome, $email, $numero, $cpf, $senha, $endereco);
    public function listarid($id);
    public function listarPro($id);
    public function alterar($id, $nome, $email, $telefone, $cpf, $senha, $endereco);
    public function apagar($id);
}