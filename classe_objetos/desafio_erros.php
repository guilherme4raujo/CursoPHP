<div class="titulo">Desafio Erros</div>

<?php
interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template {

    public function metodo3() {
        echo "Estou Funcionando";
    }
}

class classe extends ClasseAbstrata {
    function __construct($parametro) {

    }
    function metodo1(){

    }
    public function metodo2($parametro){

    }
}

$exemplo= new classe('...');
$exemplo -> metodo3();
