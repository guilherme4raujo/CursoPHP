<div class="titulo">Desafio Data</div>

<?php
echo "<hr>";
echo "<br>";

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;


    public function apresentar() {
        echo "Data :{$this -> dia}/{$this -> mes}/{$this -> ano}";
    }
}

$d1 = new Data();
$d1 -> apresentar(); 