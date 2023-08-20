<div class="titulo">Construtor & Destrutor</div>

<?php
echo "<hr>";
echo "<br>";

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $novaIdade) {
        echo "Construtor Invocado! <br>";
        $this -> nome = $novoNome;
        $this -> idade = $novaIdade;
    }


function __destruct() {
    echo "E morreu ! <br>";
}

public function apresentar() {
    echo "{$this ->nome} , {$this -> idade} anos <br> ";
}

}
$pessoa = new Pessoa("Rebeca Maria", 40);
$pessoa -> apresentar();