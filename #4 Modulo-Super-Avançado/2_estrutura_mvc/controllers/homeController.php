<?php

class homeController extends controller {

    public function index() {
        $dados = array();

        $fotos = new fotos();
        $dados['fotos'] = $fotos->getFotos();
        

        $this->loadTemplate('home', $dados);

    }
    
    public function loadTemplate($viewName, $viewData = array()) {
        require('views'.DIRECTORY_SEPARATOR.'template.php');
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require('views'.DIRECTORY_SEPARATOR.$viewName.'.php');
    }


}
?>