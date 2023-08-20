<div class="titulo">Primeira Classe</div>

<?php
echo "<hr>";
echo "<br>";
class Cliente {
    // Atributos :
    public $nome = 'Anonimo';
    public $idade = 18;

    public function apresentar() {
        echo "Nome: {$this -> nome} <br> Idade : {$this -> idade}<br>";
    }

}

$c1 = new Cliente();
$c1 -> nome = 'Ana Silva';
$c1 -> idade = 27;
$c1 -> apresentar();

echo "<br>";

$c2 = new Cliente;
$c2 -> nome = 'Gabriel';
$c2 -> idade = 43;
$c2 -> apresentar();
