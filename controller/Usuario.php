<?php

namespace controller;

use service\UsuarioService;
use template\UsuarioTemp;
use template\ITemplate;

class Usuario
{

    public function __construct() {}

    public function listar()
    {

        $service = new UsuarioService();
        return $resultado = $service->listarUsuario();
    }
    public function listarid()
    {
        $id = $_SESSION['usuario_logado_id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);
    }

    public function inserir($nome, $email, $telefone, $cpf, $senha, $endereco)
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $nome = $data["nome"] ?? null;
        $email = $data["email"] ?? null;
        $telefone = $data["telefone"] ?? null;
        $cpf = $data["cpf"] ?? null;
        $senha = $data["senha"] ?? null;
        $endereco = $data["endereco"] ?? null;


        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $service = new UsuarioService();
        $resultado = $service->inserir($nome, $email, $telefone, $cpf, $senha_hash, $endereco);

        return ["message" => "Inserçao bem-sucedida."];
    }
    public function logado()
    {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $senha = $data["senha"] ?? null;
        $email = $data["email"] ?? null;

        $service = new UsuarioService();
        $resultado = $service->logar($email);

        if ($resultado && isset($resultado[0]) && password_verify($senha, $resultado[0]['senha'])) {

            $_SESSION['usuario_logado_id'] = $resultado[0]['usuario_id'];
            $_SESSION['usuario_logado_nome'] = $resultado[0]['nome'];


            $token = $this->autenticar($_SESSION['usuario_logado_id'], $_SESSION['usuario_logado_nome']);
            return [
                "message" => "Login bem-sucedido.",
                "token" => $token,
                "usuario" => [
                    "id" => $_SESSION['usuario_logado_id'],
                    "nome" => $_SESSION['usuario_logado_nome']
                ]
            ];
        } else {
            session_unset();
            session_destroy();
            http_response_code(401);
            return ["erro" => "Credenciais inválidas."];
            exit;
        }
    }




    public function alterar()
    {

        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);

        $nome = $data["nome"] ?? null;
        $email = $data["email"] ?? null;
        $telefone = $data["telefone"] ?? null;
        $cpf = $data["cpf"] ?? null;
        $senha = $data["senha"] ?? null;
        $endereco = $data["endereco"] ?? null;

        $id =  $_SESSION['usuario_logado_id'];




        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $service = new UsuarioService();
        $resultado = $service->alterar($id, $nome, $email, $telefone, $cpf, $senha_hash, $endereco);
        return ["message" => "alteração bem-sucedida."];
    }
    public function apagar()
    {

        $service = new UsuarioService();
        $resultado = $service->apagar($_SESSION['usuario_logado_id']);
        return ["message" => "apagado com sucesso."];
    }

    public function autenticar()
    {
        $service = new UsuarioService();
        return $service->autenticar($_SESSION['usuario_logado_id'], $_SESSION['usuario_logado_nome']);
    }
    public function login()
    {
        $template = new UsuarioTemp();
        $template->layout("\\public\\usuario\\login.php");
    }
}