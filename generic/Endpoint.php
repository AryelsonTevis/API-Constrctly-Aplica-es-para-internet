<?php

namespace generic;


class Endpoint
{
    public $classe;
    public $execucao;
    public function __construct()
    {
        $this->classe = "controller\\" . $classe;
        $this->execucao = $execucao;
    }
}