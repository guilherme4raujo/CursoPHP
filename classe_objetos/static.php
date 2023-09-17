<div class="titulo">Membros Estáticos</div>
<?php
class A {
    public $naoStatic = "Variavel de instância";
    public static $static = "Variavel de classe(estática)";

    public function mostrarA(){
        echo "Não estática = {$this -> naoStatic}<br>";
        //Tentativa 1
        //echo "Estático = {$this -> static}<br>";
        //Tentativa 2
        echo "Estático =" . self::$static ."<br>";
    
    }

    public static function mostrarStaticA() {
        //echo "Não estatica {$this -> naoStatic}<br>";
        //echo "Estatico = {$static}<br>";
       echo "Estático =" . self::$static ."<br>";
    }
}

//$objetoA = new A();
//$objetoA -> mostrarA();
//$objetoA -> mostrarStaticA(); Não é a forma ideal
A::mostrarStaticA(); // acessar diretamente pela classe
