<div class="titulo">Desafio Impressão</div>


<!--
    - Imprima apenas os valores do array que contém indice par
    - Desafio Adicional: Resolver com for e foreach
    - Valores esperados : AAA, CCC, EEE
-->


<?php
$array=[
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF",
];
for($i=0; $i < count($array); $i++){
    if($i % 2 === 1) continue;
    echo "{$array[$i]}<br>";
}
echo "<br>";

foreach($array as $chave => $valor){

    if($chave % 2 ===1) continue;
    echo "$valor<br>";
}