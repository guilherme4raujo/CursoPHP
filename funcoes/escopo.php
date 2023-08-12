<div class="titulo">Função e escopo</div>

<?php
echo "<br>";
function imprimirMensangens(){
    echo "Olá "; 
    echo "Até a próxima!<br>";
}

imprimirMensangens();
imprimirMensangens();
imprimirMensangens();

$variavel = 1;

function trocaValor(){
    $variavel = 2;
    echo "Durante a função : $variavel <br>";
}

echo "Antes: $variavel <br>";
trocavalor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade(){
    global $variavel; 
    $variavel = 3;
    echo "Durante a função : $variavel <br>"; 
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());
