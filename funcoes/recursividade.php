<div class="tirulo">Recursividade</div>

<?php
echo "<hr>";
echo "<br>";
function somaUmAte($numero){
    $soma = 0;
    for($i = 1; $i <= $numero; $i++) {
        $soma += $numero;
    }
    return $soma;
}

echo somaUmAte(5) . "<br>";

function somaRecursivaUmAte($numero) {
    //Condição de Parada:
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo somaRecursivaUmAte(10) . "<br>";
echo somaRecursivaUmAte(5) . "<br>";