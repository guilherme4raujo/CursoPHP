<div class="titulo">Argumento Variáveis</div>

<?php
echo "<br>";
function soma($a, $b){
    return $a + $b;
}

echo soma(4,5) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7, 8];
echo "<br>" . somaCompleta(...$array);


function membros($titular, ...$dependentes){
    echo "Titular: $titular<br>";
    if($dependentes) {
        foreach($dependentes as $dep){
            echo "Dependentes: $dep";
        }
    }
}
echo "<br>";
echo membros('Guilherme Araújo<br>', 'Gustavo Araújo<br>', 'Rosangela Araújo<br>', 'Manoel Barros');
echo "<br>";
echo membros('Guigui');

