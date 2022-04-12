<?php
require_once("Cadastro.class.php");

Class Resultado{

    public function _contruct(){

        $cadastro = new Cadastro();
        $cadastro->setNome($_POST['nome']);
        $cadastro->setEmail($_POST['email']);

        echo $cadastro->getNome() . "<br>" . $cadastro->getEmail();

    }
    
}

?>