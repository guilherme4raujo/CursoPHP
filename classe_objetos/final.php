<div class="titulo">Modificador Final </div>

<?php
echo "<hr>";

abstract class Abstrata {
        abstract public function metodo1();

        public final function metodo2() {
            echo "Não vou Mudar<br>";
        }
}

class Classe extends Abstrata {

    public function metodo1() {
        echo "Executando método 1<br>";
    }

   // public function metodo2(){
   //     echo "Extendendo método 2<br>";
   // }
}

$classe = new Classe();
$classe -> metodo1();
$classe -> metodo2();


final class Unica{
    public $att = "Valor!<br>";
}

$gui = new Unica();
echo $gui -> att;