<?php

namespace generic;

class Controller
{
    private $arrayChamadas = [];
    public function __construct()
    {
        $this->arrayChamadas = [
            "usuario/login" => new Acao("Usuario", "login"),
            "usuario/logado" => new Acao("Usuario", "logado"),
            "usuario/logout" => new Acao("Usuario", "logout"),
            "usuario/listar" => new Acao("Usuario", "listar"),
            "usuario/listarid" => new Acao("Usuario", "listarid"),
            "usuario/listarpro" => new Acao("Usuario", "listarpro"),
            "usuario/formulario" => new Acao("Usuario", "formulario"),
            "usuario/formularioalterar" => new Acao("Usuario", "alterarForm"),
            "usuario/inserir" => new Acao("Usuario", "inserir"),
            "usuario/alterar" => new Acao("Usuario", "alterar"),
            "usuario/apagar" => new Acao("Usuario", "apagar"),
            "usuario/menu" => new Acao("Usuario", "menu"),


            "proprietario/listar" => new Acao("Proprietario", "listar"),
            "proprietario/listarid" => new Acao("Proprietario", "listarid"),
            "proprietario/formulario" => new Acao("Proprietario", "formulario"),
            "proprietario/formularioalterar" => new Acao("Proprietario", "alterarForm"),
            "proprietario/alterar" => new Acao("Proprietario", "alterar"),
            "proprietario/inserir" => new Acao("Proprietario", "inserir"),
            "proprietario/apagar" => new Acao("Proprietario", "apagar"),
            "proprietario/voltar" => new Acao("Proprietario", "voltar"),


            "casa/listarcasa" => new Acao("Casa", "listarcasa"),
            "casa/formulario" => new Acao("Casa", "formulario"),
            "casa/inserir" => new Acao("Casa", "inserir"),
            "casa/formularioalterar" => new Acao("Casa", "alterarForm"),
            "casa/alterar" => new Acao("Casa", "alterar"),
            "casa/apagar" => new Acao("Casa", "apagar"),
            "casa/voltar" => new Acao("Casa", "voltar"),

            

            "comodo/listarcomodo" => new Acao("Comodo", "listarcomodo"),
            "comodo/alterar" => new Acao("Comodo", "alterar"),
            "comodo/inserir" => new Acao("Comodo", "inserir"),
            "comodo/formulario" => new Acao("Comodo", "formulario"),
            "comodo/formularioalterar" => new Acao("Comodo", "alterarForm"),
            "comodo/inserirpor" => new Acao("Comodo", "inserirpor"),
            "comodo/apagar" => new Acao("Comodo", "apagar"),
            "comodo/voltar" => new Acao("Comodo", "voltar")



            

            
        ];
    }

    public function verificarChamadas($rota)
    {
        if (isset($this->arrayChamadas[$rota])) {
            $acao = $this->arrayChamadas[$rota];
            $acao->executar();
            return;
        }
        echo "Rota não existe!";
    }
}