<div class="titulo">Classe Abstrata</div>

<?php

abstract class Abstrata {

    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata {
    public function metodo1() {
        echo "Executando metodo 1";
    }
    
    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata {

    public function metodo1() {
        echo "Executando metodo 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2 ($parametro) {
        echo "Executando método 2 com parâmetro $parametro<br>";
    }

    public function metodo3() {
        echo "Executando metodo 3";
        $this -> metodo2('interno');
    }
}

$c = new Concreta();
$c -> metodo1();
//$c -> metodo3();


echo "Fim!";