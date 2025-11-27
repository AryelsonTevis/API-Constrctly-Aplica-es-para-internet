<?php

namespace generic;

class Rotas
{
    private $endpoints = [];

    public function __construct()
    {
        $this->endpoints = [
            "usuario" => new Acao([
                Acao::GET => new Endpoint("Usuario", "listar"),
                Acao::POST => new Endpoint("Usuario", "inserir"),
                Acao::PUT => new Endpoint("Usuario", "alterar", true),
                Acao::DELETE => new Endpoint("Usuario", "apagar", true)

            ]),
            "logar" => new Acao([

                Acao::POST => new Endpoint("Usuario", "logado")
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