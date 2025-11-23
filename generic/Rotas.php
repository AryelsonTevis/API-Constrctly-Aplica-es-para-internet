<?php

namespace generic;

class Rotas
{
    private $endpoints = [];

    public function __construct()
    {
        $this->endpoints = [
            "proprietario" => new Acao([
                Acao::POST => new Endpoint("Proprietario", "inserir"),
                Acao::GET => new Endpoint("Proprietario", "listar")
            ]),
            "casa" => new Acao([
                Acao::POST => new Endpoint("Casa", "inserir"),
                Acao::GET => new Endpoint("Casa", "listar")
            ])
        ];
    }
    public function executar($rota)
    {
        if (isset($this->endpoints[$rota])) {
            $endpoint = $this->endpoints[$rota];
            $dados = $endpoint->executar();
            $retorno = new Retorno();
            $retorno->dados = $dados;
            return $retorno;
        }
        return null;
    }
}