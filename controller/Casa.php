<?php

namespace controller;

use service\CasaService;
use service\ProprietarioService;


use template\UsuarioTemp;
use template\ITemplate;

class Casa{
    private ITemplate $template;
    
    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }

    public function listarcasa(){
        $id= $_GET['id'];
        $service = new CasaService();
        $resultado = $service->listarCasa($id);
        $_SESSION['id_proprietario']=$id;
        

        $this->template->layout("\\public\\casa\\listarcasa.php", $resultado);
    }
    public function voltar(){
        
        $service = new CasaService();
        $resultado = $service->listarCasa($_SESSION['id_proprietario']);
        
        

        $this->template->layout("\\public\\casa\\listarcasa.php", $resultado);
    }
    public function formulario()
    {
            

        $this->template->layout("\\public\\casa\\formcasa.php");
    }
    public function inserir()
    {
        
    
    $id = $_SESSION['id_proprietario'] ?? null;
        
    $bairro = $_POST["bairro"];
   
    $metros = $_POST["metros"];
    $comodos = $_POST["comodos"];
    $valor = $_POST["valor"];
    
    
    
    $service = new CasaService();
    $resultado = $service->inserir( $id, $bairro, $metros, $comodos, $valor);
    
        

        header("location: /projeto/casa/listarcasa?id=".$id);
    
    exit();
        
    }
    public function alterarForm() {
        $id = $_GET['id'];
        
        $service = new CasaService();
        $resultado = $service->listarId($id);
        

        $this->template->layout("\\public\\casa\\formalterar.php", $resultado);
        
    }
    public function alterar()
    {

        $id = $_POST["casa_id"];
        $bairro = $_POST["bairro"];
        $metros = $_POST["metros"];
        $comodos = $_POST["comodos"];
        $valor = $_POST["valor"];
       
        
        $service = new CasaService();
        $resultado = $service->alterar($id, $bairro, $metros, $comodos, $valor);

        $id_pro= $_SESSION['id_proprietario'];
        
        

        header("location: /projeto/casa/voltar");
        
    }
    public function apagar() {
        $id = $_GET['id'];
        
        
        
        $service = new CasaService();
        $resultado = $service->apagar($id);
        

        header("location: /projeto/casa/voltar");
        
    }
   
    
    
    
    
}