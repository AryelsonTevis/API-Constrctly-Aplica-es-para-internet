<?php

namespace dao;

interface IComodoDAO
{
    public function listarcomodo($id);
    public function inserir( $id, $area, $comodos);
    public function apagar($id);
    public function alterar($id, $comodo, $area,  $id_fk, $progresso);
    
}