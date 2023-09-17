<div class="titulo">Visibilidade</div>
<?php

class A {
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";


     public function mostrarA() {
        echo "Class A) = {$this -> publico}<br>";
        echo "Class A) = {$this -> protegido}<br>";
        echo "Class A) = {$this -> privado}<br>";
     }   

     private function naoMostrar() {
        echo "Não vou imprimir";
     }
}

$a = new A();
$a -> mostrarA();

class B extends A {

    public function mostrarB() {
        echo "Class B){$this -> publico}<br>";
        echo "Class B){$this -> protegido}";
        echo "Class B){$this -> privado}";
    }
}
echo "<br>";
$b = new B();
$b -> mostrarB();
$b -> mostrarA();
