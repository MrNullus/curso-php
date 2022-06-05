<?php
/*  
*** Cache ***
#> Cache são dados já processados por uma maquina (geralmente, o servidor) 
¬ que são guardados para uso de uma ou da mesma maquina
#> ciclo d cache:
    cria ele -> pega ele -> salva ele          
*/


class Cache {
    private $cache;

    public function setVar($nome, $valor) {
        $this->readCache();
        $this->cache->$nome = $valor;
        $this->saveCache();
    }

    public function getVar($nome) {
        $this->readCache();
        return $this->cache->$nome;
    }

    private function readCache() {
        $this->cache = new stdClass();

        if (file_exists('cache.cache')) {
            $this->cache = json_decode(file_get_contents('cache.cache'));
        }
    }

    private function saveCache() {
        file_put_contents('cache.cache', json_encode($this->cache));
    }

}

$cache = new Cache();
/* Setar valor em cache
$cache->setVar("nome", "Shadown Dorg"); 
*/
$cache->setVar("idade", 3500);

/* Pegar valor em cache
*/
echo "Nome eh: ". $cache->getVar("nome");
echo "<br />";
echo "Idade eh: ". $cache->getVar("idade");
echo "<br />";
echo "Espada eh: ". $cache->getVar("blade");

?>
