<?php

namespace controller;

use service\proprietarioService;
use service\usuarioService;


use template\UsuarioTemp;
use template\ITemplate;

class Proprietario
{



    public function __construct() {}
    public function listarid()
    {
        $id = $_GET['id'];
        $service = new ProprietarioService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);
    }
    public function inserir()
    {

        $id = $_SESSION['usuario_logado_id'] ?? null;




        $nome = $_POST["proprietario"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $endereco = $_POST["endereço_cobrança"];


        $service = new ProprietarioService();
        $resultado = $service->inserir($nome, $id, $email, $telefone, $cpf, $endereco);

        $service = new UsuarioService();
        $id = $_SESSION['usuario_logado_id'];
        header("location: /projeto/proprietario/voltar");


        exit();
    }
    public function formulario()
    {

        $this->template->layout("\\public\\proprietario\\formproprietario.php");
    }


    public function apagar()
    {

        $id = $_GET['id'];
        $service = new ProprietarioService();
        $resultado = $service->apagar($id);
        $service = new UsuarioService();
        $id = $_SESSION['usuario_logado_id'];
        $resultado = $service->listarPro($id);

        $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);

        exit();
    }
    public function alterarForm()
    {
        $id = $_GET['id'];
        $service = new ProprietarioService();
        $resultado = $service->listarId($id);

        $this->template->layout("\\public\\proprietario\\formalterar.php", $resultado);
    }
    public function alterar()
    {

        $id = $_POST["proprietario_id"];
        $nome = $_POST["proprietario"];
        $email = $_POST["email"];
        $telefone = $_POST["numero_telefone"];
        $cpf = $_POST["CPF_CNPJ"];

        $endereco = $_POST["endereço_cobrança"];
        $service = new ProprietarioService();
        $resultado = $service->alterar($id, $nome, $email, $telefone, $cpf, $endereco);

        $service = new UsuarioService();
        $id = $_SESSION['usuario_logado_id'];
        $resultado = $service->listarPro($id);

        $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);
    }

    public function voltar()
    {
        $service = new UsuarioService();
        $id = $_SESSION['usuario_logado_id'];
        $resultado = $service->listarPro($id);

        $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);
    }
}