<?php

namespace controller;

use service\UsuarioService;
use template\UsuarioTemp;
use template\ITemplate;

class Usuario
{
    private ITemplate $template;
    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }

    public function listar()
    {

        $service = new UsuarioService();
        $resultado = $service->listarUsuario();
        $this->template->layout("\\public\\usuario\\listar.php", $resultado);
    }
    public function listarid()
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarId($id);
    }

    public function inserir()
    {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $endereco = $_POST["endereço_cobrança"];
        $service = new UsuarioService();
        $resultado = $service->inserir($nome, $email, $telefone, $cpf, $senha_hash, $endereco);
        $this->template->layout("\\public\\usuario\\login.php");
    }
    public function formulario()
    {

        $this->template->layout("\\public\\usuario\\form.php");
    }
    public function alterarForm()
    {

        
        $service = new UsuarioService();
        $resultado = $service->listarId($_SESSION['usuario_logado_id']);

        $this->template->layout("\\public\\usuario\\formalterar.php", $resultado);
    }
    public function alterar()
    {

        $id = $_POST["usuario_id"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["numero_telefone"];
        $cpf = $_POST["CPF_CNPJ"];
        $senha = $_POST["senha"];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
        $endereco = $_POST["endereço_cobrança"];
        $service = new UsuarioService();
        $resultado = $service->alterar($id, $nome, $email, $telefone, $cpf, $senha_hash, $endereco);
        header("location: /projeto/usuario/menu");
    }
    public function apagar()
    {
        
        $service = new UsuarioService();
        $resultado = $service->apagar($_SESSION['usuario_logado_id']);
        header("Location: /projeto/usuario/logout");
        
    }
    public function listarPro()
    {
        $id = $_GET['id'];
        $service = new UsuarioService();
        $resultado = $service->listarPro($id);

       $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);
        
    }
     public function login()
    {
        $this->template->layout("\\public\\usuario\\login.php");
        
    }
     public function logado()
    {
        $senha = $_POST["senha"];        
        $email = $_POST["email"];
        
        $service = new UsuarioService();
        $resultado = $service->logar($email);
        
        if ($resultado && isset($resultado[0]) && password_verify($senha, $resultado[0]['senha'])) {
            
            $_SESSION['usuario_logado_id'] = $resultado[0]['usuario_id'];
            $_SESSION['usuario_logado_nome'] = $resultado[0]['nome'];
            $id = $resultado[0]['usuario_id'];
            $resultado = $service->listarPro($id);
            $this->template->layout("\\public\\proprietario\\listarpro.php", $resultado);
        }else{
            session_unset();   
            session_destroy(); header("Location: /projeto/");
            exit;
        }
        
    }
    public function logout()
    {
         
        session_unset();   
        session_destroy(); header("Location: /projeto/");
        exit;
        
    }
    public function menu(){
        $service = new UsuarioService();
        $resultado = $service->listarId($_SESSION['usuario_logado_id']);
        $this->template->layout("\\public\\usuario\\menu.php",$resultado);
    }
}