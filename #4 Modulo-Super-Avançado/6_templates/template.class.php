<?php
class Template {
    private $html;

    public function __construct($file) {
        if(file_exists($file)) {
            $this->html = file_get_contents($file);
        } else {
            throw new Exception("Arquivo não encontrado");
        }   
    }

    public function render($array) {

        foreach($array as $key => $value) {
            $this->html = str_replace("^{".$key."}", $value, $this->html);
        }
        
        echo $this->html;

    }   

}
?>