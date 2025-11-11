<?php

namespace dao;

interface ICasaDAO
{
    public function listarcasa($id);
    public function inserir( $id, $bairro, $metros, $comodos, $valor);
    public function apagar($id);
}