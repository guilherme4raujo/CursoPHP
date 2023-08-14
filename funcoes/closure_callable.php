<div class="titulo">Closure & Callable</div>
<!--
    Callable -> É algo que pode ser Chamado

-->
<?php
echo "<hr>";
echo "<br>";

$soma1 = function($a,$b) {
    return $a + $b;
};

echo $soma1(2,3) . '<br>';
echo (is_callable($soma1) ? 'Sim': 'Não') . '<br>';

echo "<br>";

var_dump($soma1);