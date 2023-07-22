<div class="titulo">Valor x Referência</div>

<?php
echo '<br>';
$variavel = 'valor inicial';

// Atribuição por Valor :

echo $variavel;
$variavelValor = $variavel;
echo " <br> $variavelValor";

$variavelValor = 'novo valor';
echo "<br> $variavelValor";
echo "<br> $variavel";

// Atribuição por Referência

$variavelReferencia = &$variavel;
$variavelReferencia = 'mesma referencia';

echo "<br> $variavel";
echo "<br> $variavelReferencia";
