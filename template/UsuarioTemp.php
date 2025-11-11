<?php
namespace template;

use template\ITemplate;

class UsuarioTemp implements ITemplate
{
    public function cabecalho()
    {   
        $nome_usuario = isset($_SESSION['usuario_logado_nome']) ? $_SESSION['usuario_logado_nome'] : 'Visitante';
        echo '<link rel="stylesheet" href="/projeto/assets/css/global.css">';

        

    echo "<nav>"; 
    echo "Cabeçalho - Bem-vindo(a), " .$nome_usuario.'<a class="button-usuario" href="/projeto/usuario/menu">Menu</a>';
    echo "</nav>";
    echo "<main>";
    }
    
    public function rodape()
    {   echo "</main>";
        echo "<footer>Rodapé</footer>";
    }
    public function layout($caminho, $parametro = null)
    {
        $this->cabecalho();
        include $_SERVER["DOCUMENT_ROOT"]."\\Projeto".$caminho;
    
        $this->rodape();
    }
}