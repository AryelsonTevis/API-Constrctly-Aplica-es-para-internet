<?php

namespace controller;

use service\ComodoService;
use service\UsuarioService;


use template\UsuarioTemp;
use template\ITemplate;

class Comodo{
    private ITemplate $template;
    
    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }

    public function listarcomodo(){
        
        $id= $_GET['id'];
        $service = new ComodoService();
        $resultado = $service->listarComodo($id);
        $_SESSION['id_casa'] =$id;

        $this->template->layout("\\public\\comodos\\listarcomodos.php", $resultado);
    }
    public function voltar(){
        
        $service = new ComodoService();
        $resultado = $service->listarComodo($_SESSION['id_casa']);
        
        

        $this->template->layout("\\public\\comodos\\listarcomodos.php", $resultado);
    }
    public function formulario()
    {
            

        $this->template->layout("\\public\\comodos\\formcomodos.php");
    }
    public function inserir()
    {
        
    
    $id = $_SESSION['id_casa'];
        
    
    
    $comodos = $_POST["comodo"];
    $area = $_POST["area"];
    
    
    
    $service = new ComodoService();
    $resultado = $service->inserir( $id, $area, $comodos);
    

        header("location: /projeto/comodo/listarcomodo?id=".$id);
    
    exit();
        
    }
    public function alterarForm() {
        $id = $_GET['id'];
        
        $service = new ComodoService();
        $resultado = $service->listarId($id);
        

        $this->template->layout("\\public\\comodos\\formalterar.php", $resultado);
        
    }
    public function alterar()
    {

        $id = $_POST["id_comodo"];
        $progresso = $_POST["progresso"];
        $comodo = $_POST["comodo"];
        $area = $_POST["area"];
        $id_fk = $_SESSION['id_casa'];
       

        
        $service = new ComodoService();
        $resultado = $service->alterar($id, $area, $comodo, $id_fk,$progresso);

        
        
        

        header("location: /projeto/comodo/listarcomodo?id=$id_fk");
        
    }
     public function inserirpor() {
        $id = $_GET['id'];
        $id_casa = $_SESSION['id_casa'];
        $service = new ComodoService();
        $resultado = $service->inserirpor($id);
        

        header("location: /projeto/comodo/listarcomodo?id=".$id_casa);
        
    }
    public function apagar() {
        $id = $_GET['comodo_id'];
        $idcasa = $_SESSION['id_casa'];
        
        
        $service = new ComodoService();
        $resultado = $service->apagar($id);
        

        header("location: /projeto/comodo/listarcomodo?id=".$idcasa);
        
    }
    
   
    
    
    
}