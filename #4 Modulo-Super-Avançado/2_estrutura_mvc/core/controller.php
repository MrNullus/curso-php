<?php

class controller {
    
    public function loadView($viewName, $viewData = array()) {
        //*** extrai as key de um array e transforma em variaveis - tipo destructing
        extract($viewData);
        
        include 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {        
        include 'views/template.php';
    }
    
    public function loadViewInTemplate($viewName, $viewData = array()) {        
        extract($viewData);

        include 'views/'.$viewName.'.php';
    }

}

?>