<?php

namespace dao;

interface IProprietarioDAO
{
    public function listar();

    public function listarid($id);
    public function apagar($id);
    public function inserir($nome,$id, $email, $numero, $cpf, $endereco);
    public function alterar($nome,$id, $email, $numero, $cpf, $endereco);
}