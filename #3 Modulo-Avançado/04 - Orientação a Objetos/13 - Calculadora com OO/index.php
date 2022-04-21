<?php

    class Calculdora {

        private $n;

        public function __construct($numeroInicial) {
            $this->n = $numeroInicial;
        }

        public function somar($n1) {
            $this->n += $n1;
            return $this;
        }
        public function subtrair($n1) {
            $this->n -= $n1;
            return $this;
        }
        public function multiplicar($n1) {
            $this->n *= $n1;
            return $this;
        }
        public function dividir($n1) {
            $this->n /= $n1;
            return $this;
        }
        public function resultado() {
            return $this->n;
        }

        // public function somar($n1, $n2) {
        //     return $n1 + $n2;
        // }
        // public function subtrair($n1, $n2) {
        //     return $n1 - $n2;
        // }
        // public function multiplicar($n1, $n2) {
        //     return $n1 * $n2;
        // }
        // public function dividir($n1, $n2) {
        //     return $n1 / $n2;
        // }

    }

    $calc = new Calculdora(10);

    $calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
    $resultado = $calc->resultado(); // 22.5

    echo "Resultado eh: ". $resultado;

    // echo "2 + 10 = ". $calc->somar(2, 10);
    // echo "<br />";
    // echo "20 - 16 = ". $calc->subtrair(20, 16);
    // echo "<br />";
    // echo "9 * 2 = ". $calc->multiplicar(9, 2);
    // echo "<br />";
    // echo "12 / 2 = ". $calc->dividir(12, 2);

?>