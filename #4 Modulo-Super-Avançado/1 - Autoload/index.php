<?php
/*  
    * Autoload - carregamento automatico
        -> Vai servir para carregar classes por exemplo de modo unico e facil,
        ¬ usado para evitar o problema de ficar usando require ou include para varias e varias classes


    ? Modo antigo - Não recomendado pelo PHP:
        # Ira incluir automaticamente todas as classes que não existem no arquivo PHP que estão sendo usadas
        function __autoload($class) {
            include_once $class."class.php";
        }

    ? Modo recomendado - Melhor em resolver possiveis erros, usando a bibliotea SPL
        spl_autoload_register(function($class) {
            if (file_exists($class.'.class.php')) {
                require_once($class.'.class.php');
            }
        });


*/
define("URL_CLASS", "./class/");
define("EXTENSION_CLASS", '.class.php');

spl_autoload_register(function($class) {
    if (file_exists(URL_CLASS.$class.EXTENSION_CLASS)) {
        require_once(URL_CLASS.$class.EXTENSION_CLASS);
    }
});

$obj = new Bola();
$obj->setCor("#64454");
echo "Cor da bola eh ". $obj->getCor();

$campo = new Campo();
$campo->setDados(20, 20, 40);

echo "Me de a largura :v ".$campo->getLargura();
echo "Qual a altura?: ".$campo->getAltura();
echo "Revele o comprimento :$ ".$campo->getComprimento();

?>  